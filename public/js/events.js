$(document).ready(function()
{
  /**
   * Double click timer used to detect exit clicks on modals.
   */
  var DblClickTimer = function()
  {
    this.last_clicked_at  = 0;
    this.CLICK_DECAY = 500; // Milliseconds.

    /* Starts the timer */
    this.start = function()
    {
      this.last_clicked_at = Date.now();
    };

    /* Checks if double click. True for double click. False otherwise. */
    this.check = function()
    {
      return Date.now() <= (this.last_clicked_at + this.CLICK_DECAY);
    };
  };

  /**
   * Handles all DOM manipulations and server requests for events.
   * TODO: Generalize!!!
   */
  var NuLeafEvent = function()
  {
    this.$body = $(document.body);
    this.event  = null;
    this.modal  = null;
    this.target = null;
  };

  /* Sets the event object */
  NuLeafEvent.prototype.load_event = function()
  {
    var event = this.target.data('event');
    if (event === undefined) return;

    this.event = {
      title:    event.title,
      location: event.location,
      date:     event.date
    };
  };

  /**
   * Sets the modal's backdrop to exit on double click
   * Note: Backdrop must be static and modal must be set.
   * TODO: Handle these requirements.
   */
  NuLeafEvent.prototype.set_dbl_click_close = function()
  {
    var timer = new DblClickTimer();

    this.modal.on('click.dismiss.bs.modal', function(e)
    {
      if (e.target !== e.currentTarget) return;

      if (timer.check()) $(this).modal('toggle');
      else timer.start();
    });
  };

  /* Prepares the modal form with event data and start cursor placement */
  NuLeafEvent.prototype.prepare_modal_form = function()
  {
    var modal_title  = this.modal.find('#post-event-modal-title');
    var modal_btn_ok = this.modal.find('.btn-ok');

    var input_title    = this.modal.find('input[name="title"]');
    var input_location = this.modal.find('input[name="location"]');
    var input_date     = this.modal.find('input[name="date"]');

    // Note (TP) - Work around for focusing on first input box.
    //             Have to wait because of modal fade-in animation.
    setTimeout(function()
    {
      input_title.focus();
    }, 500);

    /* Attach date time picker */
    this.modal.find('#date').datetimepicker({
      format:     'MMMM Do, YYYY hh:mm A',
      sideBySide:  true,
      stepping:    15
    });

    var method = this.target.data('method');
    switch (method)
    {
      case 'delete':

        /* Display event title. */
        $(this).find('#modal-event-title').text(this.event.title);

      break;
      // TODO: Verify event data.
      case 'patch':

        /* Set modal values */
        modal_title.text(this.event.title);
        modal_btn_ok.text('Edit Event');

        /* Fill form */
        // TODO: Fix escaped characters.
        // Note (TP) - Faker is putting '\n' in location.
        input_title.val(this.event.title);
        input_location.val(this.event.location);
        input_date.val(this.event.date);
      break;

      // TODO: Validate event data.
      // Note (TP) - Dynamic validation is a plus but could cause
      //             poorer performance.
      //             Server will also perform data validation and send
      //             back error bag.
      case 'post':
      // No break.
      default:

        /* Set modal values */
        modal_title.text('Create New Event');
        modal_btn_ok.text('Create Event');

        /* Reset form */
        input_title.val('');
        input_location.val('');
        input_date.val('');
      break;
    }
  };

  /* Sends AJAX request to server using form data and data-* fields */
  NuLeafEvent.prototype.send_request = function(success_fn, error_fn)
  {
    // Reset form errors.
    this.modal.find('.form-control-feedback').remove();
    this.modal.find('.help-block').remove();
    this.modal.find('.has-feedback').removeClass('has-feedback has-error has-success');


    // Send ajax request.
    var url   = this.target.data('href');
    var token = $('input[name="_token"]').val();

    var title    = this.modal.find('input[name="title"]').val();
    var location = this.modal.find('input[name="location"]').val();
    var date     = this.modal.find('input[name="date"]').val();

    var settings = {
      url: url,
      type: 'POST',
      success: success_fn,
      error: error_fn,
      data: {
        _token:   token,
        title:    title,
        location: location,
        date:     date
      }
    };

    switch(this.target.data('method'))
    {
      case 'delete':
        settings.context = this.modal;
        settings.data = {
          _token:   token,
          _method: 'DELETE'
        };
        $.ajax(settings);
      break;

      case 'patch':
        settings.type = 'PATCH';
        settings.data._method = 'PATCH';
        $.ajax(settings);
      break;

      case 'post':
      // No break.
      default:
        settings._method = 'POST';
        $.ajax(settings);
      break;
    }
  };

  /* Displays the form errors and re-enable confirmation button. */
  NuLeafEvent.prototype.handle_form_errors = function(errors)
  {
    var error_icon = '<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>';
    var error_msg  = '';
    var error_help = '';
    var input;

    // Show errors.
    for (var name in errors)
    {
      input      = this.modal.find('input[name="'+name+'"]');
      error_help = '<span class="help-block">'+errors[name]+'</span>';

      input.after(error_icon + error_help);
      input.parent().addClass('has-error has-feedback');
    }

    // Show success.
    var successes = this.modal.find('.modal-body').find('div:not(.has-feedback)');
    successes.addClass('has-feedback has-success');
    successes.find('input').after('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');

    this.modal.find('.btn-ok').prop('disabled', false);
  };

  /**
   * JQuery Event Listeners.
   */
  $('#confirm-delete-modal').on('show.bs.modal', function(e)
  {
    var target = $(e.relatedTarget);

    var nuleaf_event    = new NuLeafEvent();
    nuleaf_event.modal  = $(this);
    nuleaf_event.target = target;
    nuleaf_event.load_event();
    nuleaf_event.prepare_modal_form();

    $(this).find('.btn-ok').click(function()
    {
      $(this).prop("disabled", true);

      nuleaf_event.send_request(function()
      {
        $(this).modal('toggle');
        target.parent().parent().parent().slideUp(400, function()
        {
          window.location.reload(true);
        });
      }, function(jqXHR)
      {
        console.log(jqXHR);
      });
    });
  });
 
  $('#post-event-modal').on('show.bs.modal', function(e)
  { 
    var nuleaf_event    = new NuLeafEvent();
    nuleaf_event.modal  = $(this);
    nuleaf_event.target = $(e.relatedTarget);
    nuleaf_event.set_dbl_click_close();
    nuleaf_event.load_event();
    nuleaf_event.prepare_modal_form();

    $(this).find('.btn-ok').click(function()
    {
      $(this).prop("disabled", true);

      nuleaf_event.send_request(function(res)
      {
        window.location.reload(true);
      }, function(jqXHR)
      {
        switch (jqXHR.status)
        {
          case 422:
            nuleaf_event.handle_form_errors(JSON.parse(jqXHR.responseText));
          break;

          default:
            console.log('error');
        }
      });
    });
  });
});