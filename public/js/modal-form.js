/* ======================================================
 * Modal Form
 * ======================================================
 * Interactions and helper functions for the modal form.
 *
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

var ModalForm = (function($)
{
  'use strict';

  /**
   * Double click timer used to detect exit clicks on modals.
   */
  var DblClickTimer = function()
  {
    this.last_clicked_at = 0;
    this.CLICK_DECAY     = 500; // Milliseconds.

    // Starts the timer
    this.start = function() { this.last_clicked_at = Date.now(); };

    // Checks if double click. True for double click. False otherwise.
    this.check = function() { return Date.now() <= (this.last_clicked_at + this.CLICK_DECAY); };
  };

  /**
   * ModalForm Class definition
   *
   * @param $modal    JQuery DOM Element.
   * @param $target   JQuery DOM Element.
   */
  var ModalForm = function()
  {
    var $modal;
    var $target;
  };

  /* Load the current modal and target. */
  ModalForm.prototype.load = function($modal, $target)
  {
    this.$modal = $modal;
    this.$target = $target;

    // Set double click to close modal.
    // Note: modal has to be set to static.
    if (this.$target.data('close') === 'dblclick') this.set_dbl_click_close();

    // Initialize bootstrap-datetimepicker.
    this.$modal.find('.input-group.date.mobile').datetimepicker({
      format:           'MMMM Do, YYYY hh:mm A',
      ignoreReadonly:    true,
      stepping:          15,
      toolbarPlacement: 'top'
    });

    var that = this;

    // Listen to form submit.
    var $submit_btn = this.$modal.find('.btn-ok');
    $submit_btn.on('click.nuleaf.modal.form', function()
    {
      $submit_btn.prop('disabled', true);
      that.complete();
    });
    // Submit form on ENTER key.
    var $inputs = this.$modal.find('input');
    $inputs.on('keypress.nuleaf.modal.form', function(e)
    {
      if (e.which == 13)
      {
        $submit_btn.prop('disabled', true);
        that.complete();
      }
    });

    // Listen to form close. Unbind events.
    this.$modal.one('hidden.bs.modal', function()
    {
      that.remove_validation_errors();
      $submit_btn.off('click.nuleaf.modal.form');
      $inputs.off('keypress.nuleaf.modal.form');
    });

    // Assist with date input.
    $inputs.filter('.date').inputmask('mm/dd/yyyy hh:mm xm');

    // Prepare modal form with resource data.
    this.prepare_modal_form();
  };

  /* Set the modal to close on double click. */
  ModalForm.prototype.set_dbl_click_close = function()
  {
    var timer = new DblClickTimer();
    var $modal = this.$modal;
    $modal.on('click.dismiss.bs.modal.nuleaf', function(e)
    {
      if (e.target !== e.currentTarget) return;
      if (timer.check())
      {
        $modal.modal('toggle');
        $modal.off('click.dismiss.bs.modal.nuleaf');
      }
      else timer.start();
    });
  };

  /* Remove validation errors from the form. */
  ModalForm.prototype.remove_validation_errors = function()
  {
    this.$modal.find('.form-control-feedback').remove();
    this.$modal.find('.help-block').remove();
    this.$modal.find('.has-feedback').removeClass('has-feedback has-error has-success');
  };

  /* Helper method to decode an html string with html entities. */
  ModalForm.prototype.decode_html = function(html)
  {
    var text_area = document.createElement("textarea");
    text_area.innerHTML = html;
    return text_area.value;
  };
  
  /* Prepares the modal form with data */
  ModalForm.prototype.prepare_modal_form = function()
  {
    var $this;
    var $name;
    var value;
    var modal_form     = this;
    var $modal         = this.$modal;
    var $target        = this.$target;
    var $inputs        = $modal.find('input');
    var resource       = $target.data('resource');
    var resource_title = $target.data('resource-title');
    var ckeditor       = $modal.data('ckeditor');
    switch ($target.data('method'))
    {
      case 'delete':
        $modal.find('.modal-body')
          .html('Are you sure you want to delete <strong>'+resource.title+'</strong>?');
      break;
      case 'patch':
        $modal.find('.modal-title').text(resource.title);
        $modal.find('.btn-ok').text('Edit '+resource_title);
        $inputs.each(function()
        {
          $this = $(this);
          name  = $this.attr('name');
          if (resource.hasOwnProperty(name))
          {
            if ($this.data('html-entities'))
              value = modal_form.decode_html(resource[name]);
            else value = resource[name];
            $this.val(value);
          }
        });
        if (ckeditor !== undefined)
          CKEDITOR.instances[ckeditor].setData(this.decode_html(resource[$('#'+ckeditor).attr('name')]));
      break;
      case 'post':
      // no break.
      default:
        $modal.find('.modal-title').text('Create New '+resource_title);
        $modal.find('.btn-ok').text('Create '+resource_title);
        $inputs.each(function() { $(this).val(''); });
        if (ckeditor !== undefined)
          CKEDITOR.instances[ckeditor].setData('');
    }
  };

  /* Helper function to handle successful form */
  ModalForm.prototype.handle_success = function()
  {
    switch (this.$target.data('method'))
    {
      case 'delete':
        this.$modal.modal('toggle');
        this.$target.closest('li').slideUp(400, function() { window.location.reload(true); });
      break;
      case 'patch':
      // no break.
      case 'post':
      // no break.
      default:
        window.location.reload(true);
    }
  };

  /* Helper function to handle validation errors returned from server. */
  ModalForm.prototype.handle_validation_errors = function(errors)
  {
    // Show form errors.
    var error_icon = '<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>';
    var error_msg  = '';
    var error_help = '';
    var error;
    var $input;

    this.$modal.find('.error-message').each(function()
    {
      $input = $($(this).data('input'));
      error = errors[$input.attr('name')];
      if (error === undefined) return;
      
      error_help = '<span class="help-block">'+error+'</span>';
      $input.after(error_icon);
      $(this).html(error_help);
      $(this).parent().addClass('has-error has-feedback');
    });

    // Show form successes.
    var $successes = this.$modal.find('.modal-body').find('.form-group')
      .not('.has-feedback').filter(':visible');
    $successes.addClass('has-feedback has-success');
    $successes.find('input').after('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');

    this.$modal.find('.btn-ok').prop('disabled', false);
  };

  /* Helper function to route errors. */
  ModalForm.prototype.handle_errors = function(jqXHR)
  {
    switch (jqXHR.status)
    {
      case 422:
        this.handle_validation_errors(JSON.parse(jqXHR.responseText));
      break;

      default:
        console.log('error: '+jqXHR.responseText);
    }
  };

  /* Sends form data to the server using ajax and handles errors and success. */
  ModalForm.prototype.complete = function()
  {
    this.remove_validation_errors();

    var data     = {};
    var ckeditor = this.$modal.data('ckeditor');
    this.$modal.find('input').filter(':visible').each(function() { data[$(this).attr('name')] = $(this).val(); });
    if (ckeditor !== undefined)
    {
      var $ckeditor = $('#'+ckeditor);
      CKEDITOR.instances[ckeditor].updateElement();
      data[$ckeditor.attr('name')] = $ckeditor.val();
    }
    data._token = $('input[name="_token"]').val();
    data._method = this.$target.data('method');

    $.ajax({
      context: this,
      url:     this.$target.data('href'),
      type:    (this.$target.data('method') !== 'delete') ? this.$target.data('method'): 'post',
      data:    data,
      success: this.handle_success,
      error:   this.handle_errors
    });
  };

  return ModalForm;
}(jQuery));