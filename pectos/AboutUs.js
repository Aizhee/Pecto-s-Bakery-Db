$(document).ready(function(){
    var index = 0;
    var slides = $('.slide');
    var total_slides = slides.length;

    slides.eq(index).addClass('active');

    function showNextSlide(){
        slides.eq(index).removeClass('active');
        index = (index + 1) % total_slides;
        slides.eq(index).addClass('active');
    }

    function showPrevSlide(){
        slides.eq(index).removeClass('active');
        index = (index - 1) % total_slides;
        slides.eq(index).addClass('active');
    }

    $('.left').on('click', function(){
        showPrevSlide();
    })

    $('.right').on('click', function(){
        showNextSlide();
    })
})