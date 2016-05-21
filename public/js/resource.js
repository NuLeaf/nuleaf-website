/* ======================================================
 * Resource Plugins
 * ======================================================
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

+function($)
{
  'use strict';

  /* Animations */
  $('.slider').click(function()
  {
    var $slider = $(this).prop('disabled', true);
    var icon    = $slider.data('toggle-icon');
    var $slide  = $($slider.data("slide"));
    var $in     = $slide.find('.slide-in');
    var $out    = $slide.find('.slide-out');
    $in.removeClass('slide-in').addClass('slide-out');
    setTimeout(function()
    {
      $in.hide();
      $out.show().focus();
      $slider.prop('disabled', false);
      if (icon)
      {
        $slider.data('toggle-icon', $slider.html());
        $slider.html(icon);
      }
      setTimeout(function() { $out.removeClass('slide-out').addClass('slide-in'); }, 5);
    }, 500);
  });

  /* Users */
  // Save current target for switching in between modals.
  var $target; 
  $('#details-modal').on('show.bs.modal', function(e) { $target = $(e.relatedTarget).parents('.resource'); });
  $('#user-details-edit-btn').click(function()
  {
    $(this).parents('.modal').modal('toggle');
    $target.find('[data-target="#form-modal"]').click();
  });
  $('#user-details-delete-btn').click(function()
  {
    $(this).parents('.modal').modal('toggle');
    $target.find('[data-target="#confirm-modal"]').click();
  });

  /* Steminar */
  if (typeof CKEDITOR !== 'undefined')
  {
    // Bootstrap modal and CKEDITOR fix from https://gist.github.com/Reinmar/b9df3f30a05786511a42#ckeditor-inside-bootstrap-modals 
    $.fn.modal.Constructor.prototype.enforceFocus = function() {
      $(document)
        .off('focusin.bs.modal')
        .on('focusin.bs.modal', $.proxy(function(e)
        {
          if (this.$element[0] !== e.target &&
             !this.$element.has( e.target ).length &&
             !$(e.target).closest('.cke_dialog, .cke').length)
                this.$element.trigger('focus');
        }, this));
    };
    
    // Load CKEDITOR.
    CKEDITOR.replace('steminar-body');
  }

  // Load Modal Form.
  var modal_form = new ModalForm();
  $('#form-modal, #confirm-modal, #details-modal').on('show.bs.modal', function(e)
  {
    var $this     = $(this);
    var $target   = $(e.relatedTarget);
    var $resource = $target.parents('.resource');
    if ($resource.length !== 0) modal_form.load($this, $resource);
    else modal_form.load($this, $target);
  });
}(jQuery);