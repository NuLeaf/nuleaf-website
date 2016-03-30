$(document).ready(function() {
  $('#dateTimePicker').datetimepicker({
    format:   'MMMM Do, YYYY hh:mm A',
    stepping: 15
  });

  $('.delete-steminars-btn').click(function() {
    var id = $(this).attr('value');
    var form = '#delete-' + id;
    $(form).submit();
  });

  CKEDITOR.replace('steminar-body');
  var steminarBody = $('#steminar-body').attr('value');
  CKEDITOR.instances['steminar-body'].setData(steminarBody);
});