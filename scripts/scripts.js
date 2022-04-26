

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

const greetings = ['Good evening climbers!', 'Good afternoon climbers!', 'Good morning climbers!',
                    'Welcome climbers!'];
if (hourNow > 18)
{ document.write('<h3>' + greetings[0] + '</h3>') } //Good evening...
else if (hourNow > 12 && hourNow < 18)
{ document.write('<h3>' + greetings[1] + '</h3>') } //Good afternoon...
else if (hourNow > 0 && hourNow < 12)
{ document.write('<h3>' + greetings[2] + '</h3>') } //Good morning...
else
{ document.write('<h3>' + greetings[3] + '</h3>') } //Welcome climbers!