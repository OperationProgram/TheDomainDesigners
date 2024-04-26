document.getElementById('contact_form').addEventListener('submit', function(event) {
    // Show the overlay with the loading spinner
    console.log("submitted");
    document.getElementById('spinner_overlay').style.display = 'flex';
});