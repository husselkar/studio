const profiles = [
    {
        name: "VIJAY",
        role: "Photographer",
        experience: "5 years in professional photography",
        specialty: "Wedding & Portrait Photography",
        image: "img2.jpg"
    },
    {
        name: "TANISHKA",
        role: "Videographer",
        experience: "8 years in filmmaking",
        specialty: "Event & Documentary Films",
        image: "img1.jpg"
    },
    {
        name: "HARRY",
        role: "Video Editor",
        experience: "6 years in post-production",
        specialty: "Cinematic Edits & Color Grading",
        image: "img3.jpg"
    },
    {
        name: "HARVIND",
        role: "Cameraman",
        experience: "4 years in live shooting",
        specialty: "TV Shows & Live Events",
        image: "img4.jpg"
    }
];

const albumGrid = document.querySelector(".album-grid");

function loadProfiles() {
    if (!albumGrid) {
        console.error("Album grid element not found");
        return;
    }

    const fragment = document.createDocumentFragment();

    profiles.forEach(profile => {
        const card = document.createElement("div");
        card.classList.add("album-item");
        card.innerHTML = `
            <img src="${profile.image}" alt="${profile.name}">
            <div class="album-details">
                <h2>${profile.name}</h2>
                <p class="role">${profile.role}</p>
                <p><strong>Experience:</strong> ${profile.experience}</p>
                <p><strong>Specialty:</strong> ${profile.specialty}</p>
            </div>
        `;
        fragment.appendChild(card);
    });

    albumGrid.appendChild(fragment);
}

loadProfiles();
