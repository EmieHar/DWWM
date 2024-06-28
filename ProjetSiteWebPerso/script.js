document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("contactForm").addEventListener("submit", function(event) {
        // Prevent default form submission
        event.preventDefault();

        // Collect form data
        var formData = new FormData(this);

        // Send form data using fetch API
        fetch(this.action, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.text();
        })
        .then(data => {
            // Do something with the response data if needed
            console.log(data);
            alert('Message sent successfully!');
            document.getElementById("contactForm").reset();
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
            alert('Oops! Something went wrong.');
        });
    });
});
