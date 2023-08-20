function changeCarttext() {
    var add_to_cart_btn = document.getElementById('bottom_button');
    add_to_cart_btn.innerHTML = '';
    add_to_cart_btn.innerHTML = `
        <button id="add_to_cart" class="add_cart"
            style="border-radius: 5px; background-color: #ef0000;width: 170px; height: 50px; font-size: 20px;">
            <a class="cart_link" href="cart.html" target="_blank">
                Go To Cart
            </a>
        </button>
        <button id="buy_now" class="buy_now"
            style="border-radius: 5px; background-color: #ef0000;width: 170px; height: 50px; font-size: 20px;">Buy
            Now</button>
     `
};

function render_add_To_Cart_btn_txt() {
    var product_id = parseInt(document.querySelector('.p_id').innerText);

    cartItems = localStorage.getItem('cartItems');
    cartItems = JSON.parse(cartItems);

    cartItems.forEach(function (item) {
        if (item.id == product_id) {
            changeCarttext();
        }
      });

    // var item;
    // for (item of cartItems) {
    //     if (item.id == product_id) {
    //         changeCarttext();
    //     }
    // }
};
render_add_To_Cart_btn_txt();