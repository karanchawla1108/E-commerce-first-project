

let searchbox = document.querySelector(".search-bar");


document.querySelector("#search-btn").onclick=()=>{ 
    searchbox.classList.toggle('active');
    shopCart.classList.remove('active');
    loginbtn.classList.remove('active');   
    navbar.classList.remove('active');
 


}

let shopCart = document.querySelector('.shopping-cart');

document.querySelector("#cart-btn").onclick=()=>{ 
    shopCart.classList.toggle('active');
    searchbox.classList.remove('active');
    loginbtn.classList.remove('active');   
    navbar.classList.remove('active');
 



}


let loginbtn = document.querySelector('.login-form');

document.querySelector("#login-btn").onclick=()=>{ 
    loginbtn.classList.toggle('active');
    searchbox.classList.remove('active');
    shopCart.classList.remove('active');
    navbar.classList.remove('active');
 



}


let navbar = document.querySelector('.navbar');

document.querySelector("#menu-btn").onclick=()=>{ 
 navbar.classList.toggle('active');
 searchbox.classList.remove('active');
 shopCart.classList.remove('active');
 loginbtn.classList.remove('active');   




}

window.onscroll =() =>{
    searchbox.classList.remove('active');
    shopCart.classList.remove('active');
    loginbtn.classList.remove('active');   
    navbar.classList.remove('active');
 


}



// Get all elements with class "image"
var images = document.querySelectorAll(".image");

// Loop through each image element
images.forEach(function(image) {
    // Change the width and height of each image
    image.style.width = "31rem"; // Set the width to 300 pixels
    image.style.height = "20rem"; // Set the height to 200 pixels
});






document.addEventListener("DOMContentLoaded", function() {
    // Get all "add to cart" buttons
    var addToCartButtons = document.querySelectorAll(".btn");

    // Add event listener to each "add to cart" button
    addToCartButtons.forEach(function(button) {
        button.addEventListener("click", function(event) {
            // Prevent the default action of the button
            event.preventDefault();

            // Get the parent element of the button, which is the product container
            var product = button.closest(".box");

            // Get product details
            var productName = product.querySelector("h3").innerText;
            var productPrice = parseFloat(product.querySelector(".price").innerText.replace("£", ""));

            // Create a new element for the cart item
            var cartItem = document.createElement("div");
            cartItem.classList.add("box");
            cartItem.innerHTML = `
                <i class="fas fa-trash delete"></i>
                <img src="${product.querySelector("img").src}" alt=""/>
                <div class="content">
                    <h3>${productName}</h3>
                    <span class="price">${product.querySelector(".price").innerText}</span>
                    <span class="quantity">qty : 1</span>
                </div>
            `;

            // Append the cart item to the shopping cart
            document.querySelector(".shopping-cart").insertAdjacentElement("beforeend", cartItem);

            // Update total price
            updateTotalPrice(productPrice);
            
            // Add event listener to the delete button of the cart item
            var deleteButton = cartItem.querySelector(".delete");
            deleteButton.addEventListener("click", function() {
                cartItem.remove(); // Remove the cart item from the DOM
                updateTotalPrice(-productPrice); // Update total price after removing the item
            });
        });
    });
});

// Function to update total price
function updateTotalPrice(price) {
    var totalPriceElement = document.querySelector(".total");
    var currentTotal = parseFloat(totalPriceElement.innerText.replace("Total : £", ""));
    var newTotal = currentTotal + price;
    totalPriceElement.innerText = "Total : £" + newTotal.toFixed(2);
}


// Select the checkout button element
var checkoutButton = document.querySelector('.shopping-cart .btn');

// Add event listener to the checkout button
checkoutButton.addEventListener('click', function(event) {
    // Prevent the default action of the button
    event.preventDefault();
    
    // Redirect to checkout.html
    window.location.href = './checkout.html';
});



// login update.
// login update.


