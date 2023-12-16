// Ensure that the DOM content is loaded before executing the script
document.addEventListener("DOMContentLoaded", function () {
    // Load the cart from cookies on page load
    function loadCartFromCookies() {
        var cookieValue = document.cookie.split("; ").find(row => row.startsWith("listCart="));
        if (cookieValue) {
            // Decode the URL-encoded cookie value
            let decodedValue = decodeURIComponent(cookieValue.split("=")[1]);

            try {
                // Parse the JSON string
                listCart = JSON.parse(decodedValue);
            } catch (error) {
                // Handle any parsing errors
                console.error("Error parsing JSON from cookies:", error);
                listCart = [];
            }
        } else {
            listCart = [];
        }
    }

    // Initialize the cart on page load
    let listCart = [];
    loadCartFromCookies();
    addCartToHTML();

    function addCartToHTML() {
        // clear data default
        let listCartHTML = document.querySelector(".returnCart .list");
        listCartHTML.innerHTML = "";

        let totalQuantityHTML = document.querySelector(".totalQuantity");
        let totalPriceHTML = document.querySelector(".totalPrice");
        let totalQuantity = 0;
        let totalPrice = 0;
        // if has product in Cart
        if (listCart) {
            listCart.forEach(product => {
                if (product) {
                    let newCart = document.createElement("div");
                    newCart.classList.add("item");
                    newCart.innerHTML = `
                        <img src="${product.image}">
                        <div class="info">
                            <div class="name">${product.name}</div>
                            <div class="price">€ ${product.price}</div>
                        </div>
                        <div class="quantity">${product.quantity}</div>
                        <div class="returnPrice">€ ${product.price * product.quantity}</div>`;
                    listCartHTML.appendChild(newCart);
                    totalQuantity = totalQuantity + product.quantity;
                    totalPrice = totalPrice + product.price * product.quantity;
                }
            });
        }
        totalQuantityHTML.innerText = totalQuantity;
        totalPriceHTML.innerText = "€ " + totalPrice.toFixed(2);
    }

    // Handle checkout button click
    let checkoutButton = document.querySelector(".buttonCheckout");
    checkoutButton.addEventListener("click", function () {
        
        alert("Thank you! Your order is right on your way");
    });
});
