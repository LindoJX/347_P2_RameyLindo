// Created by Thomas Ramey and Jake Lindo on 4/15/22
// This file contains all of the general scripts used across the website

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

var greet;

const greetings = ['Good evening climbers!', 'Good afternoon climbers!', 'Good morning climbers!',
                    'Welcome climbers!'];
if (hourNow > 18)

{ greet = greetings[0] }
else if (hourNow > 12)
{ 
  greet = greetings[1] 
}
else if (hourNow > 0)
{ 
  greet = greetings[2] 
}
else
{ 
  greet = greetings[3] 
}
document.write('<h3>' + greet + '</h3>');
