$(document).ready(function(){
    var Gallery = $('#pop-up-container');
    var Iframe = $('#Iframe');
    
    $('#loginBtn').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "LogIn.html");
        $("body").css("overflow", "hidden")
     });

     $('#signUpBtn').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "LogIn.html");
        $("body").css("overflow", "hidden")
     });

    $('.cart').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "Cart.html");
        $("body").css("overflow", "hidden")
     });

     $('.fav').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "Favorites.html");
        $("body").css("overflow", "hidden")
     });

    $('#ReadMore').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "AboutUs.html");
        $("body").css("overflow", "hidden")
     });

    $('#crackers').on('click', function(){
       Gallery.fadeIn();
       Iframe.attr("src", "gallery.html?data-filter=BiscuitsAndCrackers");
       $("body").css("overflow", "hidden")
    });

    $('#bread').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "gallery.html?data-filter=Bread");
        $("body").css("overflow", "hidden")
    });

    $('#desserts').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "gallery.html?data-filter=Desserts");
        $("body").css("overflow", "hidden")
    });

    $('.close-button').on('click', function(){
        Gallery.fadeOut();
        $("body").css("overflow", "auto")
    });

    $('#Home').on('click', function(){
        $('body, html').animate({
            scrollTop: $('body').offset().top
        }, 600);
    })

    $('#About-us').on('click', function(){
        $('body, html').animate({
            scrollTop: $('#container-about').offset().top - 160
        }, 600);
    })

    $('#Product').on('click', function(){
        $('body, html').animate({
            scrollTop: $('#products').offset().top - 120
        }, 600);
    })

    $('#Gallery').on('click', function(){
        $('body, html').animate({
            scrollTop: $('#gallery').offset().top - 120
        }, 600);
    })

    $('#Contact-us').on('click', function(){
        $('body, html').animate({
            scrollTop: $('#footer').offset().top - 160
        }, 600);
    })
})