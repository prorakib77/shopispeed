
//==== Back-to-top button start
$(window).on('scroll', function(event) {
    if($(this).scrollTop() > 600){
        $('.back-to-top').fadeIn(200)
    } else{
        $('.back-to-top').fadeOut(200)
    }
});
//==== Animate the scroll to top
$('.back-to-top').on('click', function(event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: 0,
    }, 1000);
});

//==== Back-to-top button end



// faq accordion design 
var acc = document.getElementsByClassName("accordion");
var i;
var len = acc.length;
for (i = 0; i < len; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// faq accordion design 

// counter paert 
$('.counter').counterUp({
    delay: 10,
    time: 1000
});
// counter paert 


// service slider 


$(".service_slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: true,
    prevArrow: '<i class="fa-solid fa-circle-left sc_prev"></i>',
    nextArrow: '<i class="fa-solid fa-circle-right sc_next"></i>',
   });
// service slider 
// service slider 


$(".pri_card_slider").slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: true,
    dots: true,
    prevArrow: '<i class="fa-solid fa-circle-left sc_prev"></i>',
    nextArrow: '<i class="fa-solid fa-circle-right sc_next"></i>',
   });
// service slider 




 