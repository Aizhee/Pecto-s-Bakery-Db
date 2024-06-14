$(document).ready(function(){
    var Gallery = $('#pop-up-container');
    var Iframe = $('#Iframe');

    //hide popup container that has LogIn.php if the user is logged in
    Iframe.on('load', function(){
        var IframeContent = Iframe.contents().find('body').html();
        //check if the url is LogIn.php
        if(IframeContent.includes('LogIn.php')){
            //detect whethere a user is logged in or not
            $.ajax({
                url: 'check_login.php',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    if (response.logged_in) {
                        Gallery.fadeOut();
                        $("body").css("overflow", "auto")
                    }
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    });

    $('#loginBtn').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "LogIn.php");
        $("body").css("overflow", "hidden")
     });

     $('#signUpBtn').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "LogIn.php");
        $("body").css("overflow", "hidden")
     });

    $('.cart').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "Cart.php");
        $("body").css("overflow", "hidden")
     });

     $('.fav').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "Favorites.php");
        $("body").css("overflow", "hidden")
     });

    $('#ReadMore').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "AboutUs.php");
        $("body").css("overflow", "hidden")
     });

    $('#crackers').on('click', function(){
       Gallery.fadeIn();
       Iframe.attr("src", "gallery.php?data-filter=BiscuitsAndCrackers");
       $("body").css("overflow", "hidden")
    });

    $('#bread').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "gallery.php?data-filter=Bread");
        $("body").css("overflow", "hidden")
    });

    $('#desserts').on('click', function(){
        Gallery.fadeIn();
        Iframe.attr("src", "gallery.php?data-filter=Desserts");
        $("body").css("overflow", "hidden")
    });

    $('.close-button').on('click', function(){
        Gallery.fadeOut();
        $("body").css("overflow", "auto")
    });

    $('#Home').on('click', function(){
        $('body, php').animate({
            scrollTop: $('body').offset().top
        }, 600);
    })

    $('#About-us').on('click', function(){
        $('body, php').animate({
            scrollTop: $('#container-about').offset().top - 160
        }, 600);
    })

    $('#Product').on('click', function(){
        $('body, php').animate({
            scrollTop: $('#products').offset().top - 120
        }, 600);
    })

    $('#Gallery').on('click', function(){
        $('body, php').animate({
            scrollTop: $('#gallery').offset().top - 120
        }, 600);
    })

    $('#Contact-us').on('click', function(){
        $('body, php').animate({
            scrollTop: $('#footer').offset().top - 160
        }, 600);
    })
})