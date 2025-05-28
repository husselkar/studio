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
                <button class="chat-btn">Chat</button>
                <div class="chat-box" style="display:none;">
                    <div class="chat-header">Chat with ${profile.name}</div>
                    <div class="chat-messages"></div>
                    <input type="text" class="chat-input" placeholder="Type a message...">
                    <button class="send-msg">Send</button>
                </div>
            </div>
        `;
        albumGrid.appendChild(card);
    });
}

loadProfiles();
function loadMessages(sender, receiver, container) {
    fetch(`get_messages.php?sender=${sender}&receiver=${receiver}`)
        .then(res => res.json())
        .then(messages => {
            container.innerHTML = "";
            messages.forEach(msg => {
                const div = document.createElement("div");
                div.className = 'msg ' + (msg.sender === sender ? 'self' : 'other');
                div.textContent = msg.message;
                container.appendChild(div);
            });
        });
}

albumGrid.addEventListener('click', function (e) {
    if (e.target.classList.contains('chat-btn')) {
        const chatBox = e.target.nextElementSibling;
        const name = e.target.parentElement.querySelector("h2").textContent;
        const messagesContainer = chatBox.querySelector('.chat-messages');

        chatBox.style.display = 'block';
        loadMessages(currentUser, name, messagesContainer); // Load past messages

    }

    if (e.target.classList.contains('send-msg')) {
        const chatBox = e.target.closest('.chat-box');
        const input = chatBox.querySelector('.chat-input');
        const message = input.value.trim();
        const messagesContainer = chatBox.querySelector('.chat-messages');
        const receiver = chatBox.querySelector('.chat-header').textContent.replace("Chat with ", "");
        
        if (message) {
            fetch("send_message.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: `sender=${currentUser}&receiver=${receiver}&message=${encodeURIComponent(message)}`
            }).then(() => {
                input.value = "";
                loadMessages(currentUser, receiver, messagesContainer); // Reload messages
            });
        }

        
    }
});
