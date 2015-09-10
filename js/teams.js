$(document).ready(function(){
    $(".tiptext").hide();

    $("area[title]").hover(function() {
        $(this).toggleClass("active");
        $("#" + this.title).toggle();
    });
});

