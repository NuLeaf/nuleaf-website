$('#confirm-delete').on('show.bs.modal', function(e) {
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});

$(document).on("click", "#add", function(e){
    e.preventDefault();

    var post_subject, post_location, post_date;

    post_subject = $('#subject').val();
    post_location = $('#location').val();
    post_date = $('#date').val();

    formData = new FormData();

    // Client-side check for missing fields
    if (!post_subject || !post_date) {
        document.getElementById('message').className = "center red";
        document.getElementById('message').innerHTML = "Please fill in all of the required blanks to continue.";
    } else {
        formData.append('page-type', page_type);
        if (typeof edit_id != 'undefined') {
           formData.append('event-id', edit_id);
        }
        formData.append('subject', post_subject);
        formData.append('location', post_location);
        formData.append('date', post_date);
        $.ajax({
            url: "event-insert.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function(data, textStatus, jqXHR) {
                var dataText = JSON.parse(data);
                if (dataText == 'missing information') {
                    document.getElementById('message').className = "center red";
                    document.getElementById('message').innerHTML = "Please fill in all of the required blanks to continue.";
                } else if (dataText == 'success') {
                    document.getElementById('message').className = "center green";
                    if (page_type == 'add') {
                       document.getElementById('message').innerHTML = 'The event<b> ' + post_subject + 
                       ' </b>has been successfully added. See the new event on the <a href="index.php">home page</a> and <a href="events.php">Events page</a>.';
                       $("#event-form").load("event-add.php #event-form");
                    } else if (page_type == 'edit') {
                       document.getElementById('message').innerHTML = 'Updates to the event<b> ' + post_subject + 
                       ' </b> have been added. See the updated event on the <a href="index.php">home page</a> and <a href="events.php">Events page</a>.';
                       $("#event-form").load("event-edit.php?event_id=" + edit_id + " #event-form");
                    }
                }
            }
        }); 
    }
});
