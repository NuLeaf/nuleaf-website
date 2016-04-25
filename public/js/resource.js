+function($)
{
  'use strict';

  var modal_form = new ModalForm();

  // Load Modal Form.
  $('#confirm-modal').on('show.bs.modal', function(e) { modal_form.load($(this), $(e.relatedTarget)); });
  $('#form-modal').on('show.bs.modal', function(e) { modal_form.load($(this), $(e.relatedTarget)); });

  // Animate event load.
  $('.event').each(function(i)
  {
    $(this).delay(i*200).queue(function()
    {
      var $this = $(this);
      $this.removeClass('flipped');
      $this.dequeue();
    });
  });
}(jQuery);