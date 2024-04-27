const validators = {

    email: function(emailInput, emailSuccess, emailError) {
        // Get the value of the email input field
        var email = emailInput.value;
        // Regular expression for validating email addresses
        var regex = /^[^\s@]+@[^\s@]+\.[a-zA-Z]+$/;

        if (regex.test(email)) {
            // Email is valid
            emailSuccess.style.display = "block"; 
            emailError.style.display = "none"; 
        } else {
            // Email is invalid
            emailSuccess.style.display = "none"; 
            emailError.style.display = "block"; 
        }
    },

    url: function(urlInput, urlSuccess, urlError) {
        // Get the value of the url input field
        var url = urlInput.value;
        // Regular expression for validating url addresses
        var regex = /^[^ "]+\.[a-zA-Z]+$/;

        if (url.trim() === '') {
            urlSuccess.style.display = "none"; 
            urlError.style.display = "none"; 
        }

        else if (regex.test(url)) {
            // url is valid
            urlSuccess.style.display = "block"; 
            urlError.style.display = "none"; 
        } else {
            // url is invalid
            urlSuccess.style.display = "none"; 
            urlError.style.display = "block"; 
        }
    },

    phone: function(phoneInput, phoneSuccess, phoneError) {
        const phoneNumber = phoneInput.value.replace(/\D/g, '');

        // Format the phone number with parentheses, space, and hyphen
        let formattedNumber = '';
        if (phoneNumber.length >= 3) {
            formattedNumber += `(${phoneNumber.slice(0, 3)}`;
        }
        if (phoneNumber.length >= 6) {
            formattedNumber += `) ${phoneNumber.slice(3, 6)}-`;
        }
        if (phoneNumber.length >= 10) {
            formattedNumber += `${phoneNumber.slice(6, 10)}`;
        }

        // Update the input field value with the formatted number
        phoneInput.value = formattedNumber;

        if (phoneInput.value.length == 14) {
            phoneSuccess.style.display = "block"; 
            phoneError.style.display = "none"; 
        }

        else {
            phoneSuccess.style.display = "none"; 
            phoneError.style.display = "block"; 
        }
    },

    requiredNonEmpty: function(input, inputSuccess, inputError) {
        if (input.value.length != 0) {
            inputSuccess.style.display = "block"; 
            inputError.style.display = "none"; 
        }

        else {
            inputSuccess.style.display = "none"; 
            inputError.style.display = "block"; 
        }
    },

    validateForm: function() {
        const errorMessages = document.querySelectorAll('.error_msg');
    
        // Iterate over each error message
        for (const errorMessage of errorMessages) {
            // Check if the error message is visible
            const computedStyle = getComputedStyle(errorMessage);
            if (computedStyle.display !== 'none') {
                // Error message is visible
                return false;
            }
        }
    
        // No visible error messages found
        return true;
    }
}

export {validators};