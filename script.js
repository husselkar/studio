const albumGrid = document.querySelector(".album-grid");

function loadProfiles() {
    fetch("get_profiles.php") // This file returns JSON from your DB
        .then(response => response.json())
        .then(profiles => {
            const fragment = document.createDocumentFragment();

            profiles.forEach(profile => {
                const card = document.createElement("div");
                card.classList.add("album-item");
                card.innerHTML = `
                    <img src="images/${profile.image}" alt="${profile.name}">
                    <div class="album-details">
                        <h2>${profile.name}</h2>
                        <p class="role">${profile.role}</p>
                        <p><strong>Experience:</strong> ${profile.experience}</p>
                        <p><strong>Specialty:</strong> ${profile.specialty}</p>
                        <button class="contact-btn" data-name="${profile.name}" data-email="${profile.email}">Contact</button>
                    </div>
                `;
                fragment.appendChild(card);
            });

            albumGrid.appendChild(fragment);
        })
        .catch(error => {
            console.error("Error fetching profiles:", error);
        });
}

loadProfiles(); // Call it once the page loads
