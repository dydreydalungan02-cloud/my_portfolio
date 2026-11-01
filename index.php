<?php require_once __DIR__ . '/content.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal portfolio of an IT student showcasing projects and creative works.">
    <title>Dydrey Dalungan | Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<header class="navbar">
    <a href="#home" class="logo">my<span>portfolio.</span></a>

    <button class="menu-toggle" id="menuToggle"
            aria-label="Toggle navigation" aria-expanded="false">
        <span></span><span></span><span></span>
    </button>

    <nav class="nav-links" id="navLinks">
        <a href="#home" class="nav-link active">Home</a>
        <a href="#creative-works" class="nav-link">Creative Works</a>
        <a href="#projects" class="nav-link">Projects</a>
    </nav>
</header>

<main>

    <!-- HOME -->
    <section class="hero section" id="home">
        <div class="hero-content">
            <p class="eyebrow"><span class="status-dot"></span> IT STUDENT PORTFOLIO</p>

            <h1>Hello, I'm<br><span class="highlight">Dydrey Dalungan.</span></h1>

            <p class="hero-description">
                An Information Technology student passionate about
                programming, web development, and creating useful
                digital experiences.
            </p>

            <div class="hero-buttons">
                <a href="#projects" class="button button-primary">
                    Explore My Projects <span aria-hidden="true">↗</span>
                </a>
                <a href="#about" class="button button-secondary">About Me</a>
            </div>
        </div>

        
        <div class="hero-image-wrapper">
            <div class="hero-image-frame">
                <img src="images/profile.jpg"
                    class="profile-image"
                    alt="My profile picture">
            </div>
        </div>


        <a href="#creative-works" class="scroll-indicator">
            <span>SCROLL TO EXPLORE</span><span aria-hidden="true">↓</span>
        </a>
    </section>

    <!-- CREATIVE WORKS -->
    <section class="creative-section section" id="creative-works">
        <div class="section-heading">
            <div>
                <p class="eyebrow">A LITTLE BIT OF CREATIVITY</p>
                <h2>Creative <span class="highlight">Works</span></h2>
            </div>
        </div>

        <div class="creative-grid">
            <article class="creative-card creative-card-large">
                <div class="creative-image" data-artwork="kayumi">
                    <img src="images/kayumi.jpg" alt="Kayumi creative work">
                </div>
                <div class="creative-info">
                    <div>
                        <p class="card-category">DIGITAL DESIGN</p>
                        <h3>Kayumi</h3>
                    </div>
                    <span class="card-arrow" aria-hidden="true">↗</span>
                </div>
            </article>

            <article class="creative-card">
                <div class="creative-image" data-artwork="quote">
                    <img src="images/quote.jpg" alt="Quote design">
                </div>
                <div class="creative-info">
                    <div>
                        <p class="card-category">GRAPHIC DESIGN</p>
                        <h3>Quote Design</h3>
                    </div>
                    <span class="card-arrow" aria-hidden="true">↗</span>
                </div>
            </article>

            <article class="creative-card">
                <div class="creative-image" data-artwork="chicken">
                    <img src="images/chicken.jpg" alt="Chicken-themed creative design">
                </div>
                <div class="creative-info">
                    <div>
                        <p class="card-category">CREATIVE PROJECT</p>
                        <h3>Chicken Design</h3>
                    </div>
                    <span class="card-arrow" aria-hidden="true">↗</span>
                </div>
            </article>
        </div>
    </section>

    <!-- CREATIVE WORK DETAILS MODAL -->
    <div class="artwork-modal" id="artworkModal" aria-hidden="true">
        <div class="artwork-modal-content" role="dialog"
             aria-modal="true" aria-labelledby="artworkTitle">

            <button class="artwork-close" id="artworkClose"
                    aria-label="Close artwork details">&times;</button>

            <div class="artwork-detail-image">
                <img id="artworkDetailImage" src="" alt="">
            </div>

            <div class="artwork-detail-info">
                <p class="eyebrow" id="artworkCategory">CREATIVE WORK</p>
                <h2 id="artworkTitle">Artwork Title</h2>
                <p id="artworkDescription">Description of the artwork.</p>

                <div class="artwork-meta">
                    <p><strong>Software used</strong></p>
                    <p id="artworkSoftware">Add your software here</p>
                </div>

                <div class="artwork-meta">
                    <p><strong>Type</strong></p>
                    <p id="artworkType">Digital Design</p>
                </div>
            </div>
        </div>
    </div>

    <!-- PROJECTS -->
    <section class="projects-section section" id="projects">
        <div class="section-heading">
            <div>
                <p class="eyebrow">WHAT I'VE BEEN BUILDING</p>
                <h2>Featured <span class="highlight">Projects</span></h2>
            </div>
        </div>

        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
                <article class="project-card">
                    <div class="project-top">
                        <span class="project-number"><?= e($project['number']) ?></span>
                    </div>

                    <div class="project-content">
                        <p class="card-category"><?= e($project['category']) ?></p>
                        <h3><?= e($project['title']) ?></h3>
                        <p><?= e($project['description']) ?></p>

                        <div class="tag-list">
                            <?php foreach ($project['tags'] as $tag): ?>
                                <span><?= e($tag) ?></span>
                            <?php endforeach; ?>
                        </div>

                        <button class="project-link project-details-button"
                                type="button"
                                data-project="<?= e($project['title']) ?>">
                            View Project Details <span aria-hidden="true">↗</span>
                        </button>

                        <?php if (!empty($project['link'])): ?>
                            <a href="<?= e($project['link']) ?>"
                               class="project-external-link"
                               target="_blank" rel="noopener noreferrer">
                                Project link <span aria-hidden="true">↗</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- PROJECT DETAILS POPUP -->
    <div class="project-modal" id="projectModal" aria-hidden="true">
        <div class="project-modal-content" role="dialog" aria-modal="true"
             aria-labelledby="projectModalTitle" tabindex="-1">

            <button class="project-modal-close" id="projectModalClose"
                    type="button" aria-label="Close project details">&times;</button>

            <div class="project-modal-header">
                <p class="eyebrow" id="projectModalCategory">PROJECT DETAILS</p>
                <h2 id="projectModalTitle">Project title</h2>
                <p id="projectModalOverview" class="project-modal-overview"></p>
                <div id="projectModalTags" class="tag-list"></div>
                <p class="project-role">
                    <strong>My role:</strong>
                    <span id="projectModalRole"></span>
                </p>
            </div>

            <section class="project-modal-section">
                <h3>Screenshots &amp; Output</h3>
                <div class="project-screenshot-grid" id="projectModalScreenshots"></div>
            </section>

            <section class="project-modal-section" id="projectCodeSection">
                <h3>Code Snippets</h3>
                <p class="project-code-intro">
                    The following are only selected parts of the source code, not the entire project.
                </p>
                <div class="project-snippets" id="projectModalSnippets"></div>
            </section>

            <div class="project-modal-footer" id="projectModalFooter"></div>
        </div>
    </div>

    <!-- ABOUT AND CONTACT -->
    <section class="about-section section" id="about">
        <div class="about-panel">
            <div class="about-content">
                <p class="eyebrow">GET TO KNOW ME</p>
                <h2>A little <span class="highlight">about me.</span></h2>

                <p>
                    I'm an Dydrey E. Dalungan, an Information Technology student with a passion for programming, web development, and creative design. I enjoy exploring new technologies and applying my skills to create innovative solutions. 
                </p>

                <p>
                    Through my academic and personal projects, I continue
                    to develop my technical skills, creativity, and
                    problem-solving abilities.
                </p>

                <div class="interest-list">
                    <span>Web Development</span>
                    <span>Programming</span>
                    <span>Database Management</span>
                    <span>Creative Design</span>
                </div>
            </div>

            <div class="contact-card" id="contact">
                <div class="contact-icon">✉</div>
                <p class="eyebrow">LET'S CONNECT</p>
                <h3>Have a project in mind?</h3>
                <p>
                    Feel free to reach out for collaboration,
                    school projects, or just to connect.
                </p>

                <a href="mailto:YOUR_EMAIL@example.com"
                   class="button button-primary contact-button">
                    Contact Me <span aria-hidden="true">↗</span>
                </a>

                <div class="social-links">
                    <a href="https://github.com/dydreydalungan02-cloud"
                       target="_blank" rel="noopener noreferrer">GitHub ↗</a>
                    <a href="https://web.facebook.com/dydrey.e.dalungan/"
                       target="_blank" rel="noopener noreferrer">Facebook ↗</a>
                </div>
            </div>
        </div>
    </section>

</main>

<footer class="footer">
    <a href="#home" class="logo footer-logo">dydrey<span>dalungan.</span></a>
    <a href="#home" class="back-to-top">Back to top ↑</a>
</footer>

<script>
    window.portfolioProjectDetails = <?= json_encode(
        array_reduce($projects, function ($result, $project) {
            $result[$project['title']] = $project;
            return $result;
        }, []),
        JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT
    ) ?>;
</script>
<script src="script.js"></script>
</body>
</html>