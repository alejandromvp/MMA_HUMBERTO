$(document).ready(function() {

var timeSlide;
var slideTime = 7000;
var flag = false;

var slideQuotes = $(".slide-quotes");

function slideInit(){
    var slide = $('.slider');
    slide.append("<div class='slider-controls'><ul></ul></div>");
    var sControls = slide.find(".slider-controls ul");
    var n = slide.find('ul li').length;
    for(var i=0;i<n;i++){
        sControls.append("<li></li>");
    }
    sControls.find("li:nth-of-type(1)").addClass("selected");

    if( slideQuotes.length > 0 ){
        slideQuotes.find(".front-text").each(function(){
            $(this).css({opacity: "0", display: "none"});
        })
        slideQuotes.find(".front-text:first-of-type").css({display: "block", opacity: "1"});
    }
};

function sliderFade(targetIndex){
  var current = $(".slider .ul-cont ul").find(".slide-shown");
  if(targetIndex >= 0){
      clearInterval(timeSlide);
      timeSlide = setInterval(function() {sliderFade(-1);}, slideTime)
      var next = $( (".slider .ul-cont ul") ).find("li:nth-of-type("+targetIndex+")");
  }else{
      var next = current.next();
  }
  if( !flag && next.index() != current.index() ){
      flag = true;
      if( next.length == 0 ){
        next = $('.slider .ul-cont ul li:first');
      }
      next.addClass("slide-transition");
      next.css({
        opacity: "0"
      });
      slideQuotes.find(".front-text:nth-of-type("+(current.index()+1)+")").animate({
        opacity: "0"
      }, 700, function(){
          slideQuotes.find(".front-text:nth-of-type("+(current.index()+1)+")").css({
            display: "none",
            opacity: "1"
          });
      });
      next.animate({
        opacity: "1"
      }, 700, function(){
        next.addClass("slide-shown");
        next.removeClass("slide-transition");
        current.removeClass("slide-shown");
        flag = false;

        slideQuotes.find(".front-text:nth-of-type("+(next.index()+1)+")").css({
          display: "block",
          opacity: "1"
        });
      })
      target = $(".slider-controls ul");
      target.find(".selected").removeClass("selected");
      target.find("li:nth-of-type("+(next.index()+1)+")").addClass("selected");
  }

}


slideInit();
timeSlide = setInterval(function() {sliderFade(-1);}, slideTime);

$(".slider-controls ul li").on('click', function(){
    sliderFade($(this).index()+1);
})

})
