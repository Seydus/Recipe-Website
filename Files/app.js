var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function(){
  document.querySelector("body").classList.toggle("active");
})

window.onscroll = function() {myFunction()};

var header = document.getElementById("main-header-id");

var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}