

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}



function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  //Local variable
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  //For Loop
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

//JS object
var today = new Date();
var hourNow = today.getHours();

var greeting;

//If/else Conditional
if (hourNow > 18) {
    greeting = 'Good evening climbers!';
} else if (hourNow > 12) {
    greeting = 'Good afternoon climbers!';
} else if (hourNow > 0) {
    greeting = 'Good morning climbers!';
} else {
    greeting = 'Welcome climbers!';
}

document.write('<h3>' + greeting + '</h3>');