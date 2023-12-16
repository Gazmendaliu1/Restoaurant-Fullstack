let iconCart = document.querySelector('.iconCart');
let cart = document.querySelector('.cart');
let container = document.querySelector('.container');
let close = document.querySelector('.close');

iconCart.addEventListener('click', function () {
    if (cart.style.right == '-100%') {
        cart.style.right = '0';
        container.style.transform = 'translateX(-400px)';
    } else {
        cart.style.right = '-100%';
        container.style.transform = 'translateX(0)';
    }
});

close.addEventListener('click', function () {
    cart.style.right = '-100%';
    container.style.transform = 'translateX(0)';
});

// Listen for clicks on "Add to Cart" buttons
document.addEventListener('click', function (event) {
    if (event.target && event.target.classList.contains('add-to-cart-btn')) {
        let productName = event.target.getAttribute('data-name');
        let productPrice = parseFloat(event.target.getAttribute('data-price'));
        let productImage = event.target.getAttribute('data-image');

        addProductToCart(productName, productPrice, productImage);
        updateCartDisplay();
        saveCartToCookies();
    }

    if (event.target && event.target.classList.contains('change-quantity-btn')) {
        let action = event.target.getAttribute('data-action');
        let productName = event.target.getAttribute('data-name');

        changeQuantity(productName, action);
        updateCartDisplay();
        saveCartToCookies();
    }
});

// Initialize the cart on page load
let listCart = [];

function addProductToCart(name, price, image) {
    let existingProduct = listCart.find(product => product.name === name);

    if (existingProduct) {
        existingProduct.quantity++;
    } else {
        listCart.push({
            name: name,
            price: price,
            quantity: 1,
            image: image
        });
    }

    // Calculate total quantity
    let totalQuantity = listCart.reduce((total, product) => total + product.quantity, 0);

    // Update the HTML for the total quantity in the icon
    document.querySelector('.totalQuantity').textContent = totalQuantity;
}


function changeQuantity(name, action) {
    let existingProduct = listCart.find(product => product.name === name);

    if (existingProduct) {
        if (action === '+') {
            existingProduct.quantity++;
        } else if (action === '-') {
            existingProduct.quantity--;

            if (existingProduct.quantity <= 0) {
                // Remove the product from the cart if quantity is zero or negative
                listCart = listCart.filter(product => product.name !== name);
            }
        }
    }

    // Calculate total quantity
    let totalQuantity = listCart.reduce((total, product) => total + product.quantity, 0);

    // Update the HTML for the total quantity in the icon
    document.querySelector('.totalQuantity').textContent = totalQuantity;
}

function updateCartDisplay() {
    let listCartHTML = document.querySelector('.listCart');
    listCartHTML.innerHTML = '';

    listCart.forEach(product => {
        let newCartItem = document.createElement('div');
        newCartItem.classList.add('item');
        newCartItem.innerHTML = `
            <div class="content">
                <img src='${product.image}' class='card-img-top' alt='...'>
                <div class="name">${product.name}</div>
                <div class="price">$${(product.price * product.quantity).toFixed(2)} / ${product.quantity} product</div>
                <div class="quantity">
                    <button class="change-quantity-btn" data-action="-" data-name="${product.name}">-</button>
                    <span class="value">${product.quantity}</span>
                    <button class="change-quantity-btn" data-action="+" data-name="${product.name}">+</button>
                </div>
                <hr style:"color:white">
            </div>
            
        `;
        listCartHTML.appendChild(newCartItem);
    });
}



function saveCartToCookies() {
    document.cookie = "listCart=" + JSON.stringify(listCart) + "; expires=Thu, 31 Dec 2025 23:59:59 UTC; path=/;";
}

// Load the cart from cookies on page load
function loadCartFromCookies() {
    var cookieValue = document.cookie.split('; ').find(row => row.startsWith('listCart='));
    if (cookieValue) {
        // Decode the URL-encoded cookie value
        let decodedValue = decodeURIComponent(cookieValue.split('=')[1]);

        try {
            // Parse the JSON string
            listCart = JSON.parse(decodedValue);
        } catch (error) {
            // Handle any parsing errors
            console.error('Error parsing JSON from cookies:', error);
            listCart = [];
        }
    } else {
        listCart = [];
    }

    // Calculate total quantity
    let totalQuantity = listCart.reduce((total, product) => total + product.quantity, 0);

    // Update the HTML for the total quantity in the icon
    document.querySelector('.totalQuantity').textContent = totalQuantity;
}

function saveCartToCookies() {
    // Encode the listCart array and save it to cookies
    document.cookie = "listCart=" + encodeURIComponent(JSON.stringify(listCart)) + "; expires=Thu, 31 Dec 2025 23:59:59 UTC; path=/;";
}


// Call loadCartFromCookies on page load to initialize the cart
loadCartFromCookies();
// Update the cart display based on the loaded cart data
updateCartDisplay();
