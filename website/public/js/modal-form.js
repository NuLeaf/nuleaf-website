/* ======================================================
 * Modal Form
 * ======================================================
 * Interactions and helper functions for dynamic forms
 * using bootstrap modals.
 *
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

var ModalForm = (function($)
{
  'use strict';

  /**
   * ModalForm Class definition
   *
   * @param $modal    JQuery DOM Element.
   * @param $target   JQuery DOM Element.
   *
   * Data attributes:
   *   TARGET:
   *     close          - Set to 'dblclick' to enable modal close on double click.
   *     href-post      - The uri for storing new resources.
   *     href-patch     - The uri for updating a resource.
   *     method         - patch:   Default
   *                    - post:    Add to target to specify post request.
   *                    - delete:  Add to modal to specify delete request.
   *                    - CAUTION: If both added, TARGET has precidence.
   *     resource       - Resource with members matching the fields in the form.
   *
   *   MODAL:
   *     ckeditor       - id of the input field to be initialized as a ckeditor instance.
   *     html-entities  - Add this data attribute to inputs that should be processed
   *                      as an html entity. Set to 'true'.
   *     input          - Add this data attribute to a html container to signify the
   *                      input whom's errors should be placed here.
   *     confirm        - Add this data attribute to the input specified above to signify
   *                      that this input has a confirmation check (This helps to
   *                      display errors correctly with Laravel's auto validation).
   *     method         - See 'method' in TARGET section.
   *     resource-key-* - Add to any element to fill its text/html/img with the value of
   *     *:-img/-text/    the resource key provided.
   *       -html
   *     default        - Fallback default for elements with resource-key-* but no
   *       -img/-text/    resource provided.
   *       -html
   *     [method]-text  - Text to be displayed for current method type.
   *       post/patch
   *     resource-type  - The title (type) of the resource.
   *
   * Associated modules:
   *   Bootstrap Datetimepicker: All inputs with the class ".datetimepicker" will
   *                             be initialized as a datetimepicker instance.
   *   Inputmask: All inputs with the class ".inputmask" will be initialized with
   *              assistive input mask.
   *   CKEditor: Elements pointed to by data-ckeditor will have their values
   *             set and unset properly. Initiation is done seperately.
   */
  var ModalForm = function()
  {
    var $modal;
    var $target;
    var method;
    var resource;
  };

  /* Load the current modal and target. */
  ModalForm.prototype.load = function($modal, $target)
  {
    this.$modal   = $modal;
    this.$target  = $target;
    this.method   = $target.data('method') === undefined ? $modal.data('method') : $target.data('method');
    this.method   = (this.method === undefined) ? 'patch' : this.method;
    this.resource = $target.data('resource');

    // Prepare modal form with resource data.
    this.prepare_modal_form();

    // Set double click to close modal. Modal MUST be set to data-backdrop='static'.
    if (this.$target.data('close') === 'dblclick') this.set_dbl_click_close();

    // Listen to form submit.
    var modal_form  = this;
    var $submit_btn = $modal.find('.btn-submit');
    $submit_btn.on('click.submit.nuleaf.modal.form', function()
    {
      $submit_btn.prop('disabled', true);
      modal_form.complete();
    });
    // Also submit on ENTER key.
    var $inputs = $modal.find('input');
    $inputs.on('keypress.submit.nuleaf.modal.form', function(e)
    {
      if (e.which === 13)
      {
        $submit_btn.prop('disabled', true);
        modal_form.complete();
      }
    });

    // Listen to modal close. Unbind events.
    $modal.one('hidden.bs.modal', function()
    {
      modal_form.remove_validation_errors();
      $submit_btn.off('click.submit.nuleaf.modal.form');
      $inputs.off('keypress.submit.nuleaf.modal.form');
    });
  };

  /* Set the modal to close on double click. */
  ModalForm.prototype.set_dbl_click_close = function()
  {
    var $modal = this.$modal;
    $modal.on('dblclick.dismiss.nuleaf.modal.form', function(e)
    {
      if (e.target !== e.currentTarget) return;
      $modal.modal('toggle');
      $modal.off('dblclick.dismiss.nuleaf.modal.form');
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

  /* Fills in requested data */
  ModalForm.prototype.fill_requested_data = function()
  {
    var modal_form = this;
    
    if (this.resource !== undefined)
    {
      this.$modal.find('[data-resource-key-text]').each(function()
      {
        var $this = $(this);
        $this.text(modal_form.resource[$this.data('resource-key-text')]);
      });
      this.$modal.find('[data-resource-key-html]').each(function()
      {
        var $this = $(this);
        $this.html(modal_form.resource[$this.data('resource-key-html')]);
      });
      this.$modal.find('[data-resource-key-img]').each(function()
      {
        var $this = $(this);
        $this.attr('src', modal_form.resource[$this.data('resource-key-img')]);
      });
    }
    else
    {
      // Reset data.
      this.$modal.find('[data-resource-key-text]').each(function()
      {
        var $this = $(this);
        $this.text($this.data('default-text'));
      });
      this.$modal.find('[data-resource-key-html]').each(function()
      {
        var $this = $(this);
        $this.html($this.data('default-html'));
      });
      this.$modal.find('[data-resource-key-img]').each(function()
      {
        var $this = $(this);
        $this.attr('src', $this.data('default-img'));
      });
    }

    switch (this.method)
    {
      case 'post':
        this.$modal.find('[data-post-text]').each(function()
        {
          var $this = $(this);
          $this.text($this.data('post-text'));
        });
      break;
      case 'patch':
        this.$modal.find('[data-patch-text]').each(function()
        {
          var $this = $(this);
          $this.text($this.data('patch-text'));
        });
      break;
    }
  };

  /* Prepares the modal form with data */
  ModalForm.prototype.prepare_modal_form = function()
  {
    var modal_form    = this;
    var $inputs       = this.$modal.find('input');
    var $submit_btn   = this.$modal.find('.btn-submit');
    var ckeditor      = this.$modal.data('ckeditor');
    var resource_type = this.$modal.data('resource-type'); 

    this.fill_requested_data();

    // Initialize bootstrap-datetimepicker.
    if ($.isFunction($.fn.datetimepicker))
    {
      this.$modal.find('.datetimepicker').datetimepicker({
        format:           'MMMM Do, YYYY hh:mm A',
        ignoreReadonly:    true,
        stepping:          15,
        toolbarPlacement: 'top'
      });
    }

    // Initialize input mask.
    if ($.isFunction($.fn.inputmask)) $inputs.filter('.inputmask').inputmask('mm/dd/yyyy hh:mm xm');

    // Set input and submit button value.
    switch (this.method)
    {
      case 'delete':
      break;
      case 'post':
        $submit_btn.text('Create '+resource_type);
        $inputs.each(function() { $(this).val(''); });
        $("option:selected").removeAttr('selected');
        if (ckeditor !== undefined) CKEDITOR.instances[ckeditor].setData('');
      break;
      case 'patch':
      // no break.
      default:
        $submit_btn.text('Edit '+resource_type);
        $inputs.each(function()
        {
          var $this = $(this);
          var name = $this.attr('name');
          if (modal_form.resource.hasOwnProperty(name))
          {
            if ($this.data('html-entities')) $this.val(modal_form.decode_html(modal_form.resource[name]));
            else $this.val(modal_form.resource[name]);
          }
        });
        this.$modal.find('select').each(function()
        {
          var $this = $(this);
          var name = $this.attr('name');
          if (modal_form.resource.hasOwnProperty(name))
          {
            var value = modal_form.resource[name];
            if ($this.prop('multiple'))
            {
              value.split(', ').forEach(function(elem)
              {
                $this.find('option[value="'+elem+'"]').attr('selected', true);
              });
            }
            else $this.val(value);
          }
        });
        if (ckeditor !== undefined)
          CKEDITOR.instances[ckeditor].setData(this.decode_html(this.resource[$('#'+ckeditor).attr('name')]));
      break;
    }
  };

  /* Helper function to handle successful form */
  ModalForm.prototype.handle_success = function(data)
  {
    switch (this.method)
    {
      case 'delete':
        this.$modal.modal('toggle');
        this.$target.closest('.resource').slideUp(400, function() { window.location.reload(true); });
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
    this.$modal.find('.error-message').each(function()
    {
      var $this  = $(this);
      var $input = $($this.data('input'));
      var error = errors[$input.attr('name')];
      if (error === undefined) return;

      var error_help = '<span class="help-block">'+error+'</span>';
      if (!$input.is('select')) $input.after(error_icon);
      $this.html(error_help);
      $this.closest('.form-group').addClass('has-error has-feedback');
      if ($input.attr('data-confirm'))
      {
        var $input_confirm = $($input.data('confirm'));
        $input_confirm.after(error_icon);
        $input_confirm.closest('.form-group').addClass('has-error has-feedback');
      }
    });

    // Show form successes.
    var $successes = this.$modal.find('.form-group')
      .not('.has-feedback').filter(':visible').filter(function()
    {
      return ($(this).css('visibility') !== 'hidden' && $(this).css('opacity') !== 0);
    });
    $successes.addClass('has-feedback has-success');
    $successes.find('input').after('<span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>');

    this.$modal.find('.btn-submit').prop('disabled', false);
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
        console.log(jqXHR.responseText);
    }
  };

  /* Sends form data to the server using ajax and handles errors and success. */
  ModalForm.prototype.complete = function()
  {
    this.remove_validation_errors();

    var data     = {};
    var ckeditor = this.$modal.data('ckeditor');
    this.$modal.find('input, select, textarea').filter(':visible').filter(function()
    {
      return ($(this).css('visibility') !== 'hidden' && $(this).css('opacity') !== 0);
    }).each(function()
    {
      var value = $(this).val();
      if (value) data[$(this).attr('name')] = value;
    });
    if (ckeditor !== undefined)
    {
      var $ckeditor = $('#'+ckeditor);
      CKEDITOR.instances[ckeditor].updateElement();
      data[$ckeditor.attr('name')] = $ckeditor.val();
    }
    data._token  = $('input[name="_token"]').val();
    data._method = this.method;
    $.ajax({
      context: this,
      url:     this.$target.data('href-'+this.method),
      type:    (this.method !== 'delete') ? this.method : 'post',
      data:    data,
      success: this.handle_success,
      error:   this.handle_errors
    });
  };

  return ModalForm;
}(jQuery));