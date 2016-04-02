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
        var html = (users.length > 0) ? '<ul>' : '';

        for (var i = 0; i < users.length; ++i)
        {
          html += '<li>' + users[i] + '</li>';
        }

        html += (users.length > 0) ? '</ul>' : '';

        $('#user_autofill').html(html);
        // TODO: Error checking.
        // TODO: Add jqueryUI.autocomplete or jquery.autocomplete
        // $('#username_input').autocomplete();
      }
    });


  });
});