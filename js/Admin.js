
// open menu
let iconmenupcshop=document.querySelector('#icon-menu-pc-shop');
let mymenupcshop=document.querySelector('.list-menu-pc-shop');
let computerContainer=document.querySelector(".computer-container");
iconmenupcshop.onclick = ()=>{
  mymenupcshop.classList.add("active-menu-shop");
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

// function deleteProduct(button){
//   swal({
//     title: "Are you sure?",
//     icon: "warning",
//     buttons: true,
//     dangerMode: true,
//   })
//   .then((isOkey)=>{
//     if (isOkey){
//         button.onclick();
//     }
//   });
//   return false;
// }
