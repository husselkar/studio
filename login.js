document.addEventListener("DOMContentLoaded", function () {
    const form = document.querySelector("form");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
  
    form.addEventListener("submit", function (event) {
      let isValid = true;
  
      // Email validation
      if (!emailInput.value.includes("@") || !emailInput.value.includes(".")) {
        alert("Please enter a valid email address.");
        isValid = false;
      }
  
      // Password validation
      if (passwordInput.value.trim() === "") {
        alert("Password cannot be empty.");
        isValid = false;
      }
  
      // Prevent form submission if validation fails
      if (!isValid) {
        event.preventDefault();
      }
    });
  });
  