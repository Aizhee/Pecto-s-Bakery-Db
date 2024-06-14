$(document).ready(function() {
      // Function to handle login
      $('#loginBtn').on('click', function(e) {
        e.preventDefault();
        var email = $('#email').val();
        var password = $('#password').val();
        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: { loginBtn: true, email: email, password: password },
            success: function(response) {
                if (response.trim() === 'success') {
                    alert('Login successful!');
                    $('#login-wrapper').hide(); // Hide login form
                    $('body').css('overflow', 'auto'); // Restore scrolling
                    location.reload(); // Reload the page to update user information
                } else {
                    alert(response); // Show any error messages
                }
            }
        });
    });

    // Function to handle sign-up
    $('#signUpBtn').on('click', function(e) {
        e.preventDefault();
        var firstname = $('#firstname').val();
        var lastname = $('#lastname').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#createPassword').val();
        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: { signUpBtn: true, firstname: firstname, lastname: lastname, username: username, email: email, createPassword: password },
            success: function(response) {
                if (response.trim() === 'success') {
                    alert('Sign-up successful! You can now log in.');
                    $('#sign-up-wrapper').hide(); // Hide sign-up form
                    $('body').css('overflow', 'auto'); // Restore scrolling
                } else {
                    alert(response); // Show any error messages
                }
            }
        });
    });
    
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
});