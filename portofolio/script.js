document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault();
    let name = document.getElementById('name').value