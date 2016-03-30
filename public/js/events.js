$(document).ready(function() {
  $('#dateTimePicker').datetimepicker({
    format:   'MMMM Do, YYYY hh:mm A',
    stepping: 15
  });

  $('.delete-event-btn').click(function() {
    var id = $(this).attr('value');
    var form = '#delete-' + id;
    $(form).submit();
  });
});