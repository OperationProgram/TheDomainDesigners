import {validators} from "./validators.js";

var emailInput = document.getElementById("email");
var emailSuccess = document.getElementById("email_success");
var emailError = document.getElementById("email_error");
var websiteInput = document.getElementById("website");
var websiteSuccess = document.getElementById("website_success");
var websiteError = document.getElementById("website_error");
var phoneInput = document.getElementById("phone");
var phoneSuccess = document.getElementById("phone_success");
var phoneError = document.getElementById("phone_error");
var fnameInput = document.getElementById("fname");
var fnameSuccess = document.getElementById("fname_success");
var fnameError = document.getElementById("fname_error");
var lnameInput = document.getElementById("lname");
var lnameSuccess = document.getElementById("lname_success");
var lnameError = document.getElementById("lname_error");

const form = document.getElementById('contact_form');

// Form Validator Listeners
fnameInput.addEventListener("input", () => {
    validators.requiredNonEmpty(fnameInput, fnameSuccess, fnameError);
});

lnameInput.addEventListener("input", () => {
    validators.requiredNonEmpty(lnameInput, lnameSuccess, lnameError);
});

emailInput.addEventListener("input", () => {
    validators.email(emailInput, emailSuccess, emailError);
});

websiteInput.addEventListener("input", () => {
    validators.url(websiteInput, websiteSuccess, websiteError);
});

phoneInput.addEventListener("change", () => {
    validators.phone(phoneInput, phoneSuccess, phoneError);
});







// Add event listener for form submission
form.addEventListener('submit', function(event) {
    // Prevent the default form submission behavior
    

    // Validate the form fields
    const isValid = validators.validateForm();

    if (!isValid) {
        event.preventDefault();
        console.log("not submitted");
        // Display error message beneath the form
        document.getElementById('form_error').style.display = "block";
        document.querySelector('.success').style.display = "none";
        // Prevent form submission
        return;
    }
    document.getElementById('spinner_overlay').style.display = 'flex';
    // form.submit();
   
});
