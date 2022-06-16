function go_to_login() {
  window.location.href="http://192.168.0.101:8012/finalProject/php/login.php";
}
function go_to_signup() {
  window.location.href="http://127.0.0.1:8012/FinalProject/php/sign-up.php";
}

let menutoggle = document.querySelector(".toggle-menu");
menutoggle.onclick = function() {
    menutoggle.classList.toggle('active');
}

let showNav = document.querySelector("header");
window.onscroll = function() {
    // console.log(this.scrollY);
    if (this.scrollY >= 115) {
      showNav.classList.add("show");
    } else {
      showNav.classList.remove("show");
    }
};