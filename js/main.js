$(document).ready(function (){

var parallax = function() {
    var offset = $(window).scrollTop() * .001 + "px";
    $('.parallax').css({top: offset});
};

$(window).on('scroll', function(){
    parallax();
})

})
