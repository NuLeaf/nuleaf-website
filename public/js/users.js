$(document).ready(function() {
  $('#username_search').click(function()
  {
    $('#username_form').submit();
  });

  $('#username_input').keyup(function() {
    var incomplete_username = $('#username_input').val();
    var action = $('#username_form').attr('action');
    
    $.ajax(action, {
      data: { query: incomplete_username },
      success: function(users)
      {
        $('#user_autofill').html(users);
        // TODO: Error checking.
        // TODO: Add jqueryUI.autocomplete or jquery.autocomplete
        // $('#username_input').autocomplete();
      }
    });


  });
});