/* =========================
   MOBILE NAVIGATION
========================= */
const menuToggle = document.getElementById("menuToggle");
const navLinks = document.getElementById("navLinks");
const navItems = document.querySelectorAll(".nav-link");

if (menuToggle && navLinks) {
    menuToggle.addEventListener("click", () => {
        const isOpen = navLinks.classList.toggle("open");
        menuToggle.setAttribute("aria-expanded", String(isOpen));
    });

    navItems.forEach((link) => {
        link.addEventListener("click", () => {
            navLinks.classList.remove("open");
            menuToggle.setAttribute("aria-expanded", "false");
        });
    });
}

/* =========================
   ACTIVE NAVIGATION SECTION
========================= */
const sections = document.querySelectorAll(
    "#home, #creative-works, #projects"
);

if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const currentId = entry.target.id;

                navItems.forEach((link) => {
                    link.classList.toggle(
                        "active",
                        link.getAttribute("href") === `#${currentId}`
                    );
                });
            }
        });
    }, {
        rootMargin: "-25% 0px -55% 0px"
    });

    sections.forEach((section) => observer.observe(section));
}

/* =========================
   CREATIVE WORK DETAILS
========================= */
const artworkDetails = {
    kayumi: {
        title: "Kayumi",
        category: "DIGITAL DESIGN",
        type: "Digital Artwork",
        software: "Canva",
        description:
            "Kayumi is a digital artwork that I created using Canva. " +
            "The inspiration behind this piece was to show the beauty " +
            "of Morena and the strength of women. I used a combination " +
            "of colors and textures to create a visually appealing design."
    },

    quote: {
        title: "Quote Design",
        category: "GRAPHIC DESIGN",
        type: "Quote Graphic",
        software: "Ibis Paint X, Canva",
        description:
            "This quote design was created to inspire and motivate viewers. " +
            "The design features a quote that encourages self-belief and " +
            "perseverance. I used typography and colors to enhance the design."
    },

    chicken: {
        title: "Chicken Design",
        category: "CREATIVE PROJECT",
        type: "Digital Design",
        software: "Canva",
        description:
            "This chicken design poster was created as part of a creative " +
            "project. The design explores the use of colors and shapes " +
            "to create an engaging visual."
    }
};

const artworkModal = document.getElementById("artworkModal");
const artworkClose = document.getElementById("artworkClose");
const artworkDetailImage = document.getElementById("artworkDetailImage");
const artworkTitle = document.getElementById("artworkTitle");
const artworkCategory = document.getElementById("artworkCategory");
const artworkDescription = document.getElementById("artworkDescription");
const artworkSoftware = document.getElementById("artworkSoftware");
const artworkType = document.getElementById("artworkType");

document.querySelectorAll(".creative-image[data-artwork]").forEach(
    (imageBox) => {
        imageBox.addEventListener("click", () => {
            const artwork = artworkDetails[imageBox.dataset.artwork];
            const image = imageBox.querySelector("img");

            if (!artwork || !image || !artworkModal) {
                return;
            }

            artworkDetailImage.src = image.src;
            artworkDetailImage.alt = image.alt;
            artworkTitle.textContent = artwork.title;
            artworkCategory.textContent = artwork.category;
            artworkDescription.textContent = artwork.description;
            artworkSoftware.textContent = artwork.software;
            artworkType.textContent = artwork.type;

            artworkModal.classList.add("open");
            artworkModal.setAttribute("aria-hidden", "false");
            document.body.classList.add("modal-open");
            artworkClose?.focus();
        });
    }
);

function closeArtworkModal() {
    if (!artworkModal) return;

    artworkModal.classList.remove("open");
    artworkModal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("modal-open");
}

artworkClose?.addEventListener("click", closeArtworkModal);

artworkModal?.addEventListener("click", (event) => {
    if (event.target === artworkModal) {
        closeArtworkModal();
    }
});

/* =========================
   PROJECT DETAILS POPUP
========================= */
const projectModal = document.getElementById("projectModal");
const projectModalClose = document.getElementById("projectModalClose");
const projectModalContent =
    projectModal?.querySelector(".project-modal-content");

const projectTitle = document.getElementById("projectModalTitle");
const projectCategory = document.getElementById("projectModalCategory");
const projectOverview = document.getElementById("projectModalOverview");
const projectTags = document.getElementById("projectModalTags");
const projectRole = document.getElementById("projectModalRole");
const projectScreenshots =
    document.getElementById("projectModalScreenshots");
const projectSnippets = document.getElementById("projectModalSnippets");
const projectCodeSection = document.getElementById("projectCodeSection");
const projectFooter = document.getElementById("projectModalFooter");

const projectDetails = window.portfolioProjectDetails || {};

function openProjectModal(name) {
    const project = projectDetails[name];

    if (!project || !projectModal) return;

    projectTitle.textContent = project.title;
    projectCategory.textContent = project.category;
    projectOverview.textContent = project.overview;
    projectRole.textContent = project.role;

    /* Display project tags */
    projectTags.replaceChildren();

    (project.tags || []).forEach((tag) => {
        const span = document.createElement("span");
        span.textContent = tag;
        projectTags.appendChild(span);
    });

    /* Display project screenshots */
    projectScreenshots.replaceChildren();

    (project.screenshots || []).forEach((item) => {
        const figure = document.createElement("figure");
        figure.className = "project-screenshot";

        const img = document.createElement("img");
        img.src = item.image;
        img.alt = item.caption || project.title;
        img.loading = "lazy";

        img.addEventListener("error", () => {
            figure.classList.add("image-missing");
            img.remove();

            const missing = document.createElement("p");
            missing.textContent = "Add screenshot: " + item.image;
            figure.prepend(missing);
        }, { once: true });

        const caption = document.createElement("figcaption");
        caption.textContent = item.caption || "";

        figure.append(img, caption);
        projectScreenshots.appendChild(figure);
    });

    /* Display selected code snippets */
projectSnippets.replaceChildren();

if (project.snippets && project.snippets.length > 0) {

    projectCodeSection.style.display = "block";

    project.snippets.forEach((item) => {
        const card = document.createElement("article");
        card.className = "project-snippet-card";

        const heading = document.createElement("h4");
        heading.textContent = item.title;

        const language = document.createElement("p");
        language.className = "project-code-language";
        language.textContent = item.language || "code";

        const pre = document.createElement("pre");
        const code = document.createElement("code");
        code.textContent = item.code;
        pre.appendChild(code);

        const explanation = document.createElement("p");
        explanation.className = "project-code-explanation";
        explanation.textContent = item.explanation;

        const copyButton = document.createElement("button");
        copyButton.type = "button";
        copyButton.className = "copy-code-button";
        copyButton.textContent = "Copy snippet";

        copyButton.addEventListener("click", async () => {
            try {
                await navigator.clipboard.writeText(item.code);
                copyButton.textContent = "Copied!";
            } catch (error) {
                const range = document.createRange();
                range.selectNodeContents(code);

                const selection = window.getSelection();
                selection.removeAllRanges();
                selection.addRange(range);

                copyButton.textContent =
                    "Code selected — press Ctrl+C";
            }
        });

        card.append(
            heading,
            language,
            pre,
            copyButton,
            explanation
        );

        projectSnippets.appendChild(card);
    });

} else {
    projectCodeSection.style.display = "none";
}

    /* Display external project link if available */
    projectFooter.replaceChildren();

    if (project.link) {
        const link = document.createElement("a");
        link.href = project.link;
        link.target = "_blank";
        link.rel = "noopener noreferrer";
        link.className = "button button-primary";
        link.textContent = "Open project link ↗";

        projectFooter.appendChild(link);
    }

    projectModal.classList.add("open");
    projectModal.setAttribute("aria-hidden", "false");
    document.body.classList.add("modal-open");
    projectModalContent?.focus();
}

function closeProjectModal() {
    if (!projectModal) return;

    projectModal.classList.remove("open");
    projectModal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("modal-open");
}

/* Open project details when a button is clicked */
document.querySelectorAll(".project-details-button").forEach((button) => {
    button.addEventListener("click", () => {
        openProjectModal(button.dataset.project);
    });
});

/* Close project details */
projectModalClose?.addEventListener("click", closeProjectModal);

projectModal?.addEventListener("click", (event) => {
    if (event.target === projectModal) {
        closeProjectModal();
    }
});

/* Close either popup by pressing Escape */
document.addEventListener("keydown", (event) => {
    if (event.key === "Escape") {
        if (artworkModal?.classList.contains("open")) {
            closeArtworkModal();
        }

        if (projectModal?.classList.contains("open")) {
            closeProjectModal();
        }
    }
});