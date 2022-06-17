function go_to_login() {
  window.location.href="http://127.0.0.1:8012/finalProject/php/login.php";
}
function go_to_signup() {
  window.location.href="http://127.0.0.1:8012/FinalProject/php/sign-up.php";
}

let menutoggle = document.querySelector(".toggle-menu");
menutoggle.onclick = function() {
    menutoggle.classList.toggle('active');
}

let showNav = document.querySelector("header");
let span = document.querySelector(".up");
window.onscroll = function() {
    if (this.scrollY >= 115) {
      showNav.classList.add("show");
      span.classList.add("sh");
    } else {
      showNav.classList.remove("show");
      span.classList.remove("sh");
    }
};

span.onclick = function(){
window.scrollTo({
  top: 0,
  behavior: "smooth",


});

};



