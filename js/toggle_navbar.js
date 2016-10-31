$(document).ready(function() {

    $("#display-menu").on('click', function(){
        $(".nav-links").toggleClass("min-hide");
        $('nav').toggleClass("nav-fix");
    })
})
