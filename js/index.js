$(document).ready(function(){
    // Members page descriptions
    $(".thumbnail").mouseover(function() {
        $(this).children(".description").show();
    }).mouseout(function() {
        $(this).children(".description").hide();
    });
});
