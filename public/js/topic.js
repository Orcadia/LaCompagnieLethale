document.getElementById('responseForm').addEventListener('submit', function(e) {
    e.preventDefault();

    var response = document.getElementById('response').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/response', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);

            if(response.success) {
                var newResponseDiv = document.createElement('div');
                newResponseDiv.textContent = responseText;
                document.getElementById('listOfResponses').appendChild(newResponseDiv);

                // Clear the textarea
                document.getElementById('responseText').value = '';
            } else {
                // Handle error
                console.error(response.error);
            }
        }
    };

    xhr.send('response=' + encodeURIComponent(responseText));
});