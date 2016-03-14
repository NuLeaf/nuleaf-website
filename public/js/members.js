$(document).ready(function(){
    // Show descriptions when hover
    $(".thumbnail").mouseover(function() {
        $(this).children(".description").show();
    }).mouseout(function() {
        $(this).children(".description").hide();
    });
});
