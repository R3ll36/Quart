// Set the deadline date (15th July 2024)
const deadline = new Date("2024-05-29T10:05:00");

// Function to check if the deadline is exceeded
function checkDeadline() {
  const currentDate = new Date();
  if (currentDate > deadline) {
    // If deadline exceeded, set opacity to 0
    document.body.style.opacity = 0;
  }
}

// Check the deadline when the page is loaded
window.onload = checkDeadline;
