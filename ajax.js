$(document).ready(function() {
    // AJAX request to fetch products
    $.ajax({
        url: 'fetch_products.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var productList = $('#Specialties');
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