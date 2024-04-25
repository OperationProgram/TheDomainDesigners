// Function to load the footer
function loadFooter() {
    // Fetch the footer.html content
    fetch('../Footer/footer.html')
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to load footer');
            }
            return response.text();
        })
        .then(data => {
            // Create a temporary div element to hold the footer HTML
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = data;

            // Get the footer element from the temporary div
            const footer = tempDiv.querySelector('footer');

            if (!footer) {
                throw new Error('Footer element not found in fetched content');
            }

            // Append the footer to the body or replace an existing footer
            const existingFooter = document.querySelector('footer');
            if (existingFooter) {
                existingFooter.replaceWith(footer);
            } else {
                document.body.appendChild(footer);
            }// Function to load the footer
function loadFooter() {
    // Fetch the footer.html content
    fetch('../Footer/footer.html')
        .then(response => {
            if (!response.ok) {
                throw new Error('Failed to load footer');
            }
            return response.text();
        })
        .then(data => {
            // Create a temporary div element to hold the footer HTML
            const tempDiv = document.createElement('div');
            tempDiv.innerHTML = data;

            // Get the footer element from the temporary div
            const footer = tempDiv.querySelector('footer');

            if (!footer) {
                throw new Error('Footer element not found in fetched content');
            }

            // Append the footer to the body or replace an existing footer
            const existingFooter = document.querySelector('footer');
            if (existingFooter) {
                existingFooter.replaceWith(footer);
            } else {
                document.body.appendChild(footer);
            }
        })
        .catch(error => {
            console.error('Error loading footer:', error);
            // Display an error message to the user
            const errorMessage = document.createElement('p');
            errorMessage.textContent = 'Failed to load footer content';
            document.body.appendChild(errorMessage);
        });
}

// Call the loadFooter function when the page is loaded
window.addEventListener('DOMContentLoaded', loadFooter);
        })
        .catch(error => {
            console.error('Error loading footer:', error);
            // Display an error message to the user
            const errorMessage = document.createElement('p');
            errorMessage.textContent = 'Failed to load footer content';
            document.body.appendChild(errorMessage);
        });
}

// Call the loadFooter function when the page is loaded
window.addEventListener('DOMContentLoaded', loadFooter);