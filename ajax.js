$(document).ready(function() {
    // AJAX request to fetch products
    $.ajax({
        url: 'fetch_products.php',
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            var productList = $('#product-list');
            console.log('Products:', data);
            $.each(data, function(index, product) {
                var productItem = `
                    <li>
                        <img src="img/${product.photo}" alt="${product.product_name}">
                        <h3>${product_name}</h3>
                        <h4>${product.price}</h4>
                        <div class="buttons">
                            <button>
                                <i class="fa-solid fa-cart-shopping"></i>
                            </button>
                            <button>
                                <i class="fa fa-heart"></i>
                            </button>
                        </div>
                    </li>`;
                productList.append(productItem);
            });
        },
        error: function(error) {
            console.error('Error fetching products:', error);
        }
    });
});