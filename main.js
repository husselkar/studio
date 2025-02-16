
document.getElementById("loginLink").addEventListener("click", function(event) {
    event.preventDefault(); // Prevent "#" default behavior
    window.open("login.html", "_blank");
  });


const scrollRevealOption = {
    distance: "50px",
    origin: "bottom",
    duration: 1000,
  };
  
  ScrollReveal().reveal(".container .letter-s", {
    duration: 1000,
    delay: 1000,
  });
  ScrollReveal().reveal(".container img", {
    duration: 1000,
    delay: 1500,
  });
  ScrollReveal().reveal(".container .text__left", {
    ...scrollRevealOption,
    origin: "right",
    delay: 2000,
  });
  ScrollReveal().reveal(".container .text__right", {
    ...scrollRevealOption,
    origin: "left",
    delay: 2000,
  });
  ScrollReveal().reveal(".container .explore", {
    duration: 1000,
    delay: 2500,
  });
  ScrollReveal().reveal(".container h5", {
    duration: 1000,
    interval: 500,
    delay: 3000,
  });
  ScrollReveal().reveal(".container .catalog", {
    duration: 1000,
    delay: 5000,
  });
  ScrollReveal().reveal(".container .print", {
    duration: 1000,
    delay: 5500,
  });
  ScrollReveal().reveal(".footer p", {
    duration: 1000,
    delay: 7000,
  });


//validation COde

  document.addEventListener("DOMContentLoaded", function () {
    // Validate Login/Register Link
    const loginLink = document.getElementById("loginLink");
  
    if (loginLink) {
      loginLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default action if needed
        const loginPage = "login.html";
  
        // Check if login.html exists before opening (to avoid 404 errors)
        fetch(loginPage, { method: "HEAD" })
          .then((response) => {
            if (response.ok) {
              window.open(loginPage, "_blank"); // Open in new tab
            } else {
              alert("Login page not found! Please check the link.");
            }
          })
          .catch(() => alert("Error loading login page."));
      });
    }
  
    // Validate Navigation Links
    document.querySelectorAll("nav .nav__links a").forEach((link) => {
      if (link.getAttribute("href") === "#") {
        console.warn(`Warning: The link '${link.textContent}' is missing a valid URL.`);
      }
    });
  
    // Validate Footer Links
    document.querySelectorAll(".footer__links a").forEach((link) => {
      if (link.getAttribute("href") === "#") {
        console.warn(`Warning: The footer link '${link.textContent}' is missing a valid URL.`);
      }
    });
  
    console.log("Validation checks completed.");
  });
  