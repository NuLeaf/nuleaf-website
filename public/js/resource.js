/* ======================================================
 * Resource Plugins
 * ======================================================
 * Organization:   NuLeaf Technologies
 * Lead Developer: Tuan Pham (https://github.com/ttpham0111)
 * ======================================================*/

+function($)
{
  'use strict';
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
              this.$element.trigger( 'focus' );
      }, this));
    };
    
    // Load CKEDITOR.
    CKEDITOR.replace('body');
  }

  // Load Modal Form.
  var modal_form = new ModalForm();
  $('#confirm-modal').on('show.bs.modal', function(e) { modal_form.load($(this), $(e.relatedTarget)); });
  $('#form-modal').on('show.bs.modal', function(e) { modal_form.load($(this), $(e.relatedTarget)); });

}(jQuery)