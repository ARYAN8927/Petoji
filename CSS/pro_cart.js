

let cartItems = localStorage.getItem('cartItems');


function addToCart() {
  // Get the product details
  var product_id = document.querySelector('.product p.id').innerText;
  var product_name = document.querySelector('.product h2').innerText;
  var product_price = document.querySelector('.product p.price').innerText;
  var product_l_price = document.querySelector('.product p.l_price').innerText;
  var product_quantity = document.querySelector('.product p.qty').innerText;
  var product_url = document.querySelector('.product p.p_url').innerText;
  var product_img_url = document.querySelector('.product p.p_img_url').innerText;


  // Create a new object with product information
  var product = { id: product_id, name: product_name, price: product_price, l_price: product_l_price, quantity: product_quantity, p_url: product_url, p_img_url: product_img_url};


  // Store the product in local storage
  cartItems = localStorage.getItem('cartItems');
  if (cartItems) {
    cartItems = JSON.parse(cartItems);
    cartItems.push(product);
  } else {
    cartItems = [product];
  }
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
}



function renderCartItems() {
  // window.addEventListener('DOMContentLoaded', function() {
  cartItems = localStorage.getItem('cartItems');
  if (cartItems) {
    cartItems = JSON.parse(cartItems);
    var cartList = document.getElementById('dynamic_product_list');
    cartList.innerHTML = '';
    let totalPrice = 0;
    let total_l_price = 0;

    cartItems.forEach(function (item) {

      const total = item.price * item.quantity;
      totalPrice += total;
      const l_total = item.l_price * item.quantity;
      total_l_price += l_total;

      var row = document.createElement('div');
      row.classList.add('products');
      row.innerHTML = `
      <div class="prod_cart_info prod_title">
        <a class="product_link" href="${item.p_url}" target="_blank">
          <div class="prod_img_placeholder"><img src="${item.p_img_url}" class="prod_img"></div>
          <div class="prod_name">${item.name}</div>
        </a>
      </div>
      <div class="prod_cart_info prod_qty">
        <button class="quantity-btn decrease" data-id="${item.id}">-</button>
        <span>${item.quantity}</span>
        <button class="quantity-btn increase" data-id="${item.id}">+</button>
      </div>
      <div class="prod_cart_info prod_price">₹ ${item.price} <span class="new_line"></span><span class="strike-through">₹ ${item.l_price} </span></div>
      <div class="prod_cart_info total_remove">
        <div class="prod_total">₹ ${total}</div>
        <span class="tab"></span>
        <div class="remove-item-btn" data-id="${item.id}">X</div>
      </div>
      `;
      cartList.appendChild(row);
    });
    document.getElementById('cart-total').textContent = totalPrice;
    document.getElementById('cart_l_total').textContent = total_l_price;
    let savings = total_l_price - totalPrice;
    document.getElementById('cart_savings').textContent = savings;
    document.getElementById('net_cart-total').textContent = totalPrice;
  }
}

// Function to handle quantity increase event
function handleQuantity(event) {
  const itemId = event.target.dataset.id;
  // const item = cartItems.find((item) => item.id === parseInt(itemId));
  var item;
  for (item of cartItems) {
    if (item.id == itemId) {
      var quantity = item.quantity;
      // document.write(quantity);
      if (event.target.classList.contains('increase')) {
        if (item.quantity < 5) {
          quantity++;
        }
      }
      else if (event.target.classList.contains('decrease')) {
        if (item.quantity > 1) {
          quantity--;
        }
      }
      // document.write(quantity);
      item.quantity = quantity;
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
    }
  }
  renderCartItems();
}

// Function to handle remove item event
function handleRemoveItem(event) {
  const itemId = event.target.dataset.id;
  var temp = cartItems.filter((item) => item.id != parseInt(itemId));
  localStorage.setItem('cartItems', JSON.stringify(temp));
  renderCartItems();
}

// Add event listeners for quantity decrease, quantity increase, and remove item buttons
document.addEventListener('click', (event) => {
  if (event.target.classList.contains('decrease')) {
    handleQuantity(event);
  }
  else if (event.target.classList.contains('increase')) {
    handleQuantity(event);
  }
  else if (event.target.classList.contains('remove-item-btn')) {
    handleRemoveItem(event);
  }
});

// Render initial cart items
renderCartItems();