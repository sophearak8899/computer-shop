
// open menu
let iconmenupcshop=document.querySelector('#icon-menu-pc-shop');
let mymenupcshop=document.querySelector('.list-menu-pc-shop');
let computerContainer=document.querySelector(".computer-container");
iconmenupcshop.onclick = ()=>{
  mymenupcshop.classList.add("active-menu-shop");
  myOrderList.classList.remove("active2");
}
computerContainer.onclick=()=>{
  mymenupcshop.classList.remove("active-menu-shop");
}

//show laptop list and hide accessories
let clicklaptophome=document.querySelector(".list-my-laptop");
let showlaptoplist=document.querySelector(".list-computer");
clicklaptophome.onclick = ()=>{
  showlaptoplist.style.display='block';
  showaccessorieslist.style.display='none';
}

//show accessories list and hide laptop
let clickaccessories=document.querySelector(".list-my-accessories");
let showaccessorieslist=document.querySelector(".list-accessories");
clickaccessories.onclick=()=>{
  showaccessorieslist.style.display='block';
  showlaptoplist.style.display='none';
}

let preveiwContainer = document.querySelector('.computer-container-description');
//let previewBox = preveiwContainer.querySelectorAll('.box_1');

let showOrderListIcon = document.querySelector('#icon-my-order-list');
let hideOrderListIcon = document.querySelector('#icon-close-order-list');
let myOrderList = document.querySelector('.order-list-container');

//open order list
showOrderListIcon.onclick = () => {
  myOrderList.classList.add("active2");
  mymenupcshop.classList.remove("active-menu-shop");
};

//close order list
hideOrderListIcon.onclick = () => {
  myOrderList.classList.remove("active2");
};

//click each icon add to cart
// var A = document.querySelectorAll("#icon-add-product-to-cart");
// A.forEach( A => {
//   A.addEventListener('click', function() {
//     var cartId = this.getAttribute('data-id');
//     console.log(cartId);
//   })
// })




if (document.readyState == "loading") {
  document.addEventListener('DOMContentLoaded', start);
} else {
  start();
}

//list array for store
let itemsAdded = []

function start() {
  addEvent();
}

function update() {
  addEvent();
  updateTotal();
}

function addEvent() {
  //remove item from cart
  let cartRemove_btns = document.querySelectorAll(".cart-remove");
  cartRemove_btns.forEach((btn) => {
    btn.addEventListener("click", removeCardItem);
  });
  //change item quantity
  let cartQuantity_inputs = document.querySelectorAll('.cart-quantity');
  cartQuantity_inputs.forEach((input) => {
    input.addEventListener("change", changeItemQuantity);
  });
  //add item to cart
  let addCart_btn = document.querySelectorAll("#icon-add-product-to-cart");
  addCart_btn.forEach((btn) => {
    btn.addEventListener("click", addCartItem);
  });
  //btn-buy
  let buy_btn = document.querySelector(".btn-buy");
  buy_btn.addEventListener("click", buyOrder);
}

function updateTotal() {
  let cartBoxs = document.querySelectorAll('.each-order-product');
  const totalElement = document.querySelector(".all-total-price");
  let total = 0;
  cartBoxs.forEach((cartBox) => {
    let priceElement = cartBox.querySelector(".cart-price");
    let price = parseFloat(priceElement.innerHTML.replace("$", ""));
    let quantity = cartBox.querySelector(".cart-quantity").value;
    total += price * quantity;
  });
  total = total.toFixed(2);
  totalElement.innerHTML = "$" + total;
}

function changeItemQuantity() {
  if (isNaN(this.value) || this.value < 1) {
    this.value = 1;
  }
  this.value = Math.floor(this.value);
  update();
}

function removeCardItem() {
  this.parentElement.remove();
  itemsAdded = itemsAdded.filter(el => el.title != this.parentElement.querySelector(".cart-product-title").innerHTML);
  update();
  localStorage.setItem("storeItem", JSON.stringify(itemsAdded));
}

function addCartItem() {
  let product = this.parentElement.parentElement;
  let title = product.querySelector(".product-name").innerHTML;
  let price = product.querySelector(".product-price").innerHTML;
  let imgSrc = product.querySelector(".product-img").src;

  let newToAdd = {
    title: title,
    price: price,
    imgSrc: imgSrc,
  };

  //add product to cart
  let cartBoxElement = CartBoxComponent(title, price, imgSrc);
  let newNode = document.createElement("div");
  newNode.innerHTML = cartBoxElement;
  const cartContent = document.querySelector(".amount-order-product");
  update();

  //item is already exist
  if (itemsAdded.find(el => el.title == newToAdd.title)) {
    alert("This Item Is Already Exist");
    return;
  } else {
    itemsAdded.push(newToAdd);
    cartContent.appendChild(newNode);
    localStorage.setItem("storeItem", JSON.stringify(itemsAdded));
    update();
    alert("Added to cart!");
  }
}

function getAllPage() {
  // get data from localstorange
  var LY = JSON.parse(localStorage.getItem("storeItem"));
  LY.forEach(E => {
    let newToAdd = {
      title: E.title,
      price: E.price,
      imgSrc: E.imgSrc,
    };
    let title = document.querySelector(".product-name");
    let price = document.querySelector(".product-price");
    let imgSrc = document.querySelector(".product-img");
    title = E.title;
    price = E.price;
    imgSrc = E.imgSrc;

    var cartBoxElement = CartBoxComponent(title, price, imgSrc);
    var newNode = document.createElement("div");
    newNode.innerHTML = cartBoxElement;
    const cartContent = document.querySelector(".amount-order-product");
    cartContent.appendChild(newNode);
    update();

    if (itemsAdded.find(el => el.title == newToAdd.title)) {
      alert("This Product Is Already Exist");
      return;
    } else {
      itemsAdded.push(newToAdd);
      localStorage.setItem("storeItem", JSON.stringify(itemsAdded));
    }
  });
}

function buyOrder() {
  if (itemsAdded.length <= 0) {
    alert("You did not add product to Your Order !\nPlease Add it first !");
    return;
  } else {
    alert("Your order successfully !!!!! \nThank you");
    const cartContent = document.querySelector(".amount-order-product");
    cartContent.innerHTML = '';
    itemsAdded = [];
    localStorage.setItem("storeItem", JSON.stringify(itemsAdded));
  }
  update();
}

function CartBoxComponent(title, price, imgSrc) {
  return `
    <div class="each-order-product" >
      <div class="photo-product">
        <img src=${imgSrc} alt="" width="12%" class="cart-img">
        <h4 class="cart-product-title" id="${title}">${title}</h4>
      </div>
      <div class="center-of-each-product">
        <h4 class="cart-price">${price}</h4>
        <div class="number-of-qty">
          <input type="number" value="1" class="cart-quantity">
        </div>
      </div>
      <i class='fa fa-trash cart-remove'style='font-size:20px' id="${title}"></i>
    </div> `;
}


