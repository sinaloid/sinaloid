<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--CSS Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/icons/apple-touch-icon.png') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/icons/favicon-32x32.png') }}" />

    <!-- Animate CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Sinali Dionou | Full Stack Developer</title>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <h1>SINALI DIONOU</h1>
        <ul class="navigation">
            <li><a href="#apropos" class="nav-link">A propos</a></li>
            <li><a href="" class="nav-link">Compétences</a></li>
            <li><a href="" class="nav-link">Projets</a></li>
            <li><a href="" class="nav-link">Contact</a></li>
        </ul>
        <button class="burger-menu" id="burger-menu">
            <ion-icon class="bars" name="menu-outline"></ion-icon>
        </button>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="about">
        <img src="assets/images/wfh_1.svg" alt="jane-doe" loading="lazy" class="hero-img" />
        <div class="bio animate__animated animate__shakeX">
            <h2 class="bio-title">A propos de moi</h2>
            <p class="bio-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia sed
                dolorem fugit sapiente porro veniam pariatur dolore nostrum delectus
                inventore tempore minus nemo, iste ullam illo laboriosam maiores
                repudiandae quos!
            </p>
        </div>
    </section>

    <!-- More about -->
    <section class="more-about">
        <h2>More About Me</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis
            nesciunt excepturi quos obcaecati incidunt voluptatem ipsam sunt ipsum,
            autem deleniti cupiditate molestias quis unde quae totam porro dicta
            iure animi inventore, veniam hic! Omnis nulla, delectus a voluptatibus
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur
            nostrum dolor minus, libero delectus praesentium perferendis
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero,
            consequuntur labore? Ea totam voluptas amet!
        </p>
    </section>

    <!-- Skills section -->
    <section class="skills" id="skills">
        <h2 class="skill-header">Mes principales compétences</h2>

        <div class="skills-wrapper">
            <div class="first-set animate__animated animate__pulse">
                <img src="{{ asset('assets/icons/icons8-html-5.svg') }}" alt="" loading="lazy"
                    class="icon icon-card" />
                <img src="{{ asset('assets/icons/icons8-css3.svg') }}" alt="" loading="lazy" class="icon icon-card" />
                <img src="{{ asset('assets/icons/icons8-javascript.svg') }}" alt="" loading="lazy"
                    class="icon icon-card" />
            </div>

            <div class="second-set animate__animated animate__pulse">
                <img src="{{ asset('assets/icons/icons8-bootstrap.svg') }}" alt="" loading="lazy"
                    class="icon icon-card" />
                <img src="{{ asset('assets/icons/icons8-react-native.svg') }}" alt="" loading="lazy"
                    class="icon icon-card" />
                <img src="{{ asset('assets/icons/icons8-git.svg') }}" alt="" loading="lazy" class="icon icon-card" />
            </div>
        </div>
    </section>

    <!-- Projects section -->
    <section class="projects" id="projects">
        <h2 class="projects-title">Certains de mes projets récents</h2>
        <div class="projects-container">
            <div class="project-container project-card">
                <img src="{{ asset('assets/images/expenseTracker.png') }}" alt="expense-tracker" loading="lazy"
                    class="project-pic" />
                <h3 class="project-title">Expense Tracker</h3>
                <p class="project-details">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas
                    ratione vel inventore labore commodi modi quos culpa aut saepe!
                    Alias!
                </p>
                <a href="#" target="_blank" class="project-link">Check it Out</a>
            </div>
            <div class="project-container project-card">
                <img src="{{ asset('assets/images/netflixClone.png') }}" alt="netflic-clone" loading="lazy"
                    class="project-pic" />
                <h3 class="project-title">Netflix Clone</h3>
                <p class="project-details">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas
                    ratione vel inventore labore commodi modi quos culpa aut saepe!
                    Alias!
                </p>
                <a href="#" target="_blank" class="project-link">Check it Out</a>
            </div>
            <div class="project-container project-card">
                <img src="{{ asset('assets/images/greenyEarth.png') }}" alt="greeny-earth" loading="lazy"
                    class="project-pic" />
                <h3 class="project-title">Greeny Earth</h3>
                <p class="project-details">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas
                    ratione vel inventore labore commodi modi quos culpa aut saepe!
                    Alias!
                </p>
                <a href="#" target="_blank" class="project-link">Check it Out</a>
            </div>
        </div>
    </section>


    <!-- Contact section -->
    <section class="contact" id="contact">
        <h2>Entrez en contact avec moi</h2>
        <div class="contact-form-container">
            <div class="contact-form">
                <form action="https://formspree.io/f/xyylngw" method="POST">
                    <div class="form-control">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="sender-name" placeholder="Enter Your Name"
                            class="input-field" required />
                    </div>
                    <div class="form-control">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="sender-email" placeholder="Enter Your Email"
                            class="input-field" required />
                    </div>
                    <div class="form-control">
                        <label for="message">Message</label>
                        <textarea id="message" cols="60" rows="10" placeholder="Enter Your Message" name="message" class="input-field"
                            required></textarea>
                    </div>
                    <input type="submit" value="Submit" id="submit-btn" class="submit-btn" />
                </form>
            </div>
        </div>
    </section>


    <!-- Social accounts - Fixed to the right -->
    <div class="socials">
        <a href="#" target="_blank"><img src="{{ asset('assets/icons/icons8-twitter-circled.gif') }}" alt="Twitter"
                loading="lazy" class="socicon" /></a>
        <a href="#" target="_blank"><img src="{{ asset('assets/icons/icons8-instagram.gif') }}" alt="Instagram"
                loading="lazy" class="socicon" /></a>
        <a href="#" target="_blank"><img src="{{ asset('assets/icons/icons8-linkedin-circled.gif') }}" alt="Linkedin"
                loading="lazy" class="socicon" /></a>
        <a href="#" target="_blank"><img src="{{ asset('assets/icons/icons8-github.gif') }}" alt="Github"
                class="socicon" /></a>
    </div>
    <i class="scroll-up" id="scroll-up"
      ><img
        src="assets/icons/icons8-upward-arrow.gif"
        class="socicon up-arrow"
        alt="scroll-up"
    /></i>
    <!-- Footer section -->
    <footer>
        <p class="copy">&copy; Copyright 2021</p>
        <p class="copy">
            Built with &#x2661; by
            <a href="https://twitter.com/koladechris" target="_blank">Kolade Chris (Ksound)</a>
        </p>
    </footer>

    <!-- Website scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- Ion icons scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
