document.addEventListener('DOMContentLoaded', (event) => {
    const form = document.getElementById('responseForm');
    if(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            let formData = new FormData(this);

            fetch('/TopicConfig', {
                method: 'POST',
                body: formData
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // After successfully submitting the form, reload the page
                    location.reload();
                })
                .catch((error) => {
                    // Log any errors with the fetch request or response handling
                    console.error('Error:', error);
                });
        });
    }
});