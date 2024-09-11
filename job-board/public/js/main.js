// Example JavaScript functions for interactivity

// Search functionality
document.querySelector('form[action="/search"]').addEventListener('submit', function(event) {
    event.preventDefault();
    const query = document.querySelector('input[name="query"]').value;
    // Perform search logic
});
