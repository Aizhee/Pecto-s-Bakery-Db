$(document).ready(function(){
    // AJAX request to fetch products
    $.ajax({
        url: 'fetch_products.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var productList = $('.Specialties');
            $.each(data, function(index, product) {
                var productItem = `
                    <li>
                        <img src="img/${product.photo}" alt="${product.product_name}">
                        <h3>${product.product_name}</h3>
                        <h4>₱${product.price}</h4>
                        <div class="buttons">
                            <button class="add-to-cart" data-product-id="${product.product_id}">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                            <button class="add-to-favorites" data-product-id="${product.product_id}">
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                    </li>`;
                productList.append(productItem);
            });

            // Add to Cart functionality
            $('.add-to-cart').click(function() {
                var product_id = $(this).data('product-id');
                $.ajax({
                    url: 'add_to_cart.php',
                    type: 'POST',
                    data: { product_id: product_id },
                    dataType: 'json',
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });

            // Add to Favorites functionality
            $('.add-to-favorites').click(function() {
                var product_id = $(this).data('product-id');
                $.ajax({
                    url: 'add_to_favorites.php',
                    type: 'POST',
                    data: { product_id: product_id },
                    dataType: 'json',
                    success: function(response) {
                        alert(response.message);
                    },
                    error: function(error) {
                        console.error('Error:', error);
                    }
                });
            });
        },
        error: function(error) {
            console.error('Error fetching products:', error);
        }
    });

    var Gallery = $('#pop-up-container');
    var Iframe = $('#Iframe');

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