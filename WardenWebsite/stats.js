fetch('https://api.example.com/endpoint', {
  method: 'GET', // or 'POST', 'PUT', 'DELETE', etc.
  headers: {
    'Authorization': 'Bearer your-token-here', // Replace with your actual token
    'Content-Type': 'application/json', // Adjust if needed
  },
})
  .then(response => {
    if (!response.ok) {
      throw new Error('Network response was not ok');
    }
    return response.json(); // Or response.text() if the response is not JSON
  })
  .then(data => {
    console.log(data); // Handle the response data
  })
  .catch(error => {
    console.error('Fetch error:', error);
  });
