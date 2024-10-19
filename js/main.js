// Countdown Timer JavaScript
document.addEventListener('DOMContentLoaded', function () {
  // Set the target date for launch (March 1, 2025 at 14:00 CST)
  const launchDate = new Date("March 1, 2025 14:00:00 GMT-0600").getTime();

  // Function to update the countdown every second
  const countdownInterval = setInterval(function () {
      const now = new Date().getTime(); // Current time
      const timeLeft = launchDate - now; // Time left until launch

      // Time calculations for days, hours, minutes, and seconds
      const days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
      const hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

      // Display the results in the HTML elements with corresponding IDs
      document.getElementById("days").textContent = days;
      document.getElementById("hours").textContent = hours;
      document.getElementById("minutes").textContent = minutes;
      document.getElementById("seconds").textContent = seconds;

      // When the countdown reaches zero
      if (timeLeft < 0) {
          clearInterval(countdownInterval);
          document.getElementById("countdown-timer").innerHTML = "<h3>We Have Launched!</h3>";
      }
  }, 1000); // Update every second
});
