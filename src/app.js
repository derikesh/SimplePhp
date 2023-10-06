
//validating form 

function validateForm() {
   
    var name = document.forms["registrationForm"]["name"].value;
   
    var address = document.forms["registrationForm"]["address"].value;
   
    var phoneNumber = document.forms["registrationForm"]["phoneNumber"].value;
   
    var email = document.forms["registrationForm"]["email"].value;
   
    var username = document.forms["registrationForm"]["username"].value;
   
    var password = document.forms["registrationForm"]["password"].value;

    if (name == "" || address == "" || phoneNumber == "" || email == "" || username == "" || password == "") {
        alert("Please fill in all fields.");
    }
}



// for responsive nav

const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

