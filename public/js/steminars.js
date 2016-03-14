$(document).ready(function() {
  $('#dateTimePicker').datetimepicker();

  $('.delete-steminars-btn').click(function() {
    var id = $(this).attr('value');
    var form = '#delete-' + id;
    $(form).submit();
  });

  CKEDITOR.replace('steminar-body');
  var steminarBody = $('#steminar-body').attr('value');
  CKEDITOR.instances['steminar-body'].setData(steminarBody);
});