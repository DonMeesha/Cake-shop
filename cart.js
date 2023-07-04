//show cart

(function(){
    const cart = document.getElementById('cart');
    const cartInfo = document.getElementById('cart-info');
    
    cart.addEventListener('click', function(){
        cart.classList.toggle('show-cart')
    })
})











































//variables

/*
const cartBtn = document.querySelector(".cart-btn");
const closeCartBtn = document.querySelector(".close-cart");
const clearCartBtn = document.querySelector(".clear-cart");
const buyNowBtn = document.querySelector(".buy-now");
const cartDOM = document.querySelector(".cart");
const cartOverlay = document.querySelector(".cart-overlay");
const cartItems = document.querySelector(".cart-items");
const cartTotal = document.querySelector(".cart-total");
const cartContent = document.querySelector(".cart-content");
const removeItemsBtn = document.querySelector(".remove-items");



var removeItemsBtn = document.getElementsByClassName('remove-item')
consol.log(removeItemsBtn)

for (var i = 0; i < removeItemsBtn.length; i++) {
    var button = removeItemsBtn[i]
    button.addEventListener('click', Function(Event) {
        var buttonClicked = Event.target
            buttonClicked.parentElement.parentElement.remove()
    })
}

function updateCartTotal() {
    
}









//cart 
let cart = [];

//getting the product

class products {
    async getProducts() {
        try {
            let result = await fetch('products.json')
            let data = await result.json();
            return data
        } catch (error) {
            console.log(error);
        }
    }
}


//display products
class UI {

}

//local storage
class storage {

}

document.addEventListener("DOMContentLoaded", () => {
    const ui = new UI();
    const products = new Products();

    
    //get all products
    products.getProducts().then(data => colsole.log(data));
})
*/
