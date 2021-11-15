

var Menu = document.getElementById("MenuItem");
var smallImg = document.getElementsByClassName("small-img");
var indicator = document.getElementById("indicator");
var loginfrm = document.getElementById("LoginForm");
var registerfrm = document.getElementById("RegForm");

Menu.style.maxHeight = "0px";

function toggleMenu() {
    console.log('clicked');
    if (Menu.style.maxHeight == "0px") {
        Menu.style.maxHeight = "200px";
    }
    else {
        Menu.style.maxHeight = "0px";
    }
}

for (let i = 0; i < smallImg.length; i++) {
    // console.log("clicked");
    smallImg[i].addEventListener('click', changeImg, false);
}

function changeImg() {
    //Change background if any
    var productImg = document.getElementById("prodImg");
    productImg.src = this.src;
}

function register(){
    registerfrm.style.transform = "translateX(0px)";
    loginfrm.style.transform = "translateX(0px)";
    indicator.style.transform = "translateX(100px)";
}
function login() {
    registerfrm.style.transform = "translateX(300px)";
    loginfrm.style.transform = "translateX(300px)";
    indicator.style.transform = "translateX(0px)";

}