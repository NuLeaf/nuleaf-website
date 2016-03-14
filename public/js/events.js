$(document).ready(function() {
  $('#dateTimePicker').datetimepicker();

  $('.delete-event-btn').click(function() {
    var id = $(this).attr('value');
    var form = '#delete-' + id;
    $(form).submit();
  });
});