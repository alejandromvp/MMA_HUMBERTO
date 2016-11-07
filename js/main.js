$(document).ready(function (){

var parallax = function() {
    var offset = $(window).scrollTop() * .3 + "px";
    $('.parallax').css({top: offset});
};

$(window).on('scroll', function(){
    parallax();
})

})
