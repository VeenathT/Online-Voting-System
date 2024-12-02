// shop.js

function addToCart(event) {
  event.preventDefault(); // Prevent the default link behavior

  // Get the product details from the clicked element
  const productId = event.target.getAttribute("data-product-id");
  const productName = event.target.parentNode.querySelector("h3").textContent;
  const productPrice = event.target.parentNode.querySelector("p").textContent;

  // Create a new cart item element
  const cartItem = document.createElement("li");
  cartItem.innerHTML = `${productName} - ${productPrice}`;

  // Add the cart item to the cart container
  const cartItemsContainer = document.getElementById("cart-items");
  cartItemsContainer.appendChild(cartItem);
}

/* Add this style to hide the product details initially */
.product-details {
  display: none;
}

/* Add this style to show the product details when the product is clicked */
.product.clicked .product-details {
  display: block;
}

