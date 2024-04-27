import {validators} from "./validators.js";

var emailInput = document.getElementById("email");
var emailSuccess = document.getElementById("email_success");
var emailError = document.getElementById("email_error");
var nameInput = document.getElementById("name");
var nameSuccess = document.getElementById("name_success");
var nameError = document.getElementById("name_error");
var messageInput = document.getElementById("message");
var messageSuccess = document.getElementById("message_success");
var messageError = document.getElementById("message_error");
const form = document.getElementById('contact_form');

// Form Validator Listeners

nameInput.addEventListener("input", () => {
    validators.requiredNonEmpty(nameInput, nameSuccess, nameError);
});

emailInput.addEventListener("input", () => {
    validators.email(emailInput, emailSuccess, emailError);
});

messageInput.addEventListener("input", () => {
    validators.requiredNonEmpty(messageInput, messageSuccess, messageError);
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
