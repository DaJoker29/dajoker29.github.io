<html>
<head>
    <meta charset="UTF-8">
    <title>Dewitt's CV</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.2.2/masonry.pkgd.min.js"></script>
</head>
<body>
    <main class="content">
        <section class="vitals">
            <span class="name">Dewitt Buckingham</span>
            <span class="location">Manteca, California</span>
            <span class="phone"><a href="tel:+12097409063">209.740.9063</a></span>
            <span class="email"><a href="mailto:captain@zerodaedalus.net">captain@zerodaedalus.net</a></span>
        </section>

        <section class="background">
            <h2>Background</h2>
            <p>
                I have some formal education in software engineering but beyond that I am mostly self-taught. I've been playing around with websites since age 15 and software in general since way before that. I like to stay up-to-date on current web technologies and stanards. I'm constantly learning new ways of not only building sites and apps but improving on existing ones.
            </p>
            <p>
                While I'm a programmer at heart, I've heavily ventured into front-end design. Responsive and clean interfaces are what I strive for with my designs while my work on the back-end is geared towards performance and maintainability. Overall, I aim for simple and elegant solutions across the full stack.
            </p>
        </section>
        
        <section class="skills">
            <h2>Skills</h2>
            <p>
                I specialize in full-stack web development and design. Current UI/UX design patterns and practices. Stable applications with secure and documented APIs. Unit and Integration Testing. Server configuration and management. Implementation of popular CMSes and MVC frameworks. Web accessability standards. Content and Copy Editing. Analytics and SEO complicance, marketing and research.
            </p>
            <ul>
                <li>CMS</li>
                <ul>
                    <li>WordPress</li>
                </ul>
                <li>Languages and Frameworks</li>
                <ul>
                    <li>Bash/Shell</li>
                    <li>CSS</li>
                    <ul>
                        <li>Bootstrap</li>
                        <li>Less</li>
                        <li>Sass</li>
                    </ul>
                    <li>HTML</li>
                    <ul>
                        <li>Jade</li>
                    </ul>
                    <li>Javascript</li>
                    <ul>
                        <li>AJAX</li>
                        <li>Angular.js</li>
                        <li>Grunt</li>
                        <li>jQuery</li>
                        <li>Node.js</li>
                    </ul>
                    <li>MySQL</li>
                    <li>MongoDB</li>
                    <li>PHP</li>
                    <ul>
                        <li>Laravel</li>
                    </ul> 
                </ul>
                <li>Office Software</li>
                <ul>
                    <li>Google Docs</li>
                    <li>Microsoft Office</li>
                    <li>Open Office</li>
                </ul>
                <li>Operating Systems</li>
                <ul>
                    <li>Linux</li>
                    <ul>
                        <li>Debian</li>
                        <li>Fedora</li>
                        <li>Mint</li>
                        <li>Ubuntu</li>
                    </ul>
                    <li>Microsoft Windows</li>
                    <ul>
                        <li>XP</li>
                        <li>Vista</li>
                        <li>7</li>
                        <li>8+</li>
                    </ul>
                </ul>
                <li>Servers</li>
                <ul>
                    <li>Apache</li>
                    <li>nginx</li>
                </ul>
                <li>Software</li>
                <ul>
                    <li>Adobe Photoshop</li>
                    <li>Adobe Illustrator</li>
                    <li>Git</li>
                    <li>GIMP</li>
                    <li>Sublime Text</li>
                    <li>vi/vim</li>
                </ul>
            </ul>
        </section>

        <section class="projects">
            <h2>Projects</h2>
            <article class="project">
                <h3>IFB</h3>
                <p>
                    The Interfaith Food Bank is an awesome non-profit organization in Stockton, California which provides other non-profits (such as churches, group homes, etc.) with foodstuffs and other supplies to be dispensed to the public. As a gift for their dedicated work in providing for the community, I designed a website to help them spread their message and allow them to easily accept more donations.
                </p>
            </article>

            <article class="project">
                <h3>Theta</h3>
                <p>
                    Theta is a minimal WordPress theme built to give sites a sleek, sophisticated appeal while not distracting from the site's main content. It will eventually be released as a free theme on WordPress.org.
                </p>
            </article>
        </section>

        <section class="employment">
            <h2>Employment</h2>
            <article class="job">
                <h3>Zero Daedalus</h3>
                <span>Web Developer</span>
                <span>Manteca, CA</span>
                <span>3/14 to Present</span>
                <p>
                    At Zero Daedalus, we work with small businesses to create websites, web apps, branding and graphics. I handle all coding aspects.
                </p>
            </article>

            <article class="job">
                <h3>Freelance</h3>
                <span>Web Consultant</span>
                <span>Manteca, CA</span>
                <span>9/12 to Present</span>
                <p>
                    As a freelancer, I work with individuals and organizations in determine how to best utilize the internet in expanding upon or improving their businesses or ventures.
                </p>
            </article>

            <article class="job">
                <h3>New Dynamic - Hope Project</h3>
                <span>Webmaster/Technical Coordinator</span>
                <span>Oakland, CA</span>
                <span>11/11 to 10/12</span>
                <p>
                    At New Dynamic, I handled all technological aspects of the small non-profit. I built and maintained the website, as well as managed the office's internal network and workstations.
                </p>
            </article>
        </section>
    </main>

    <footer>
        <span>&copy; 2015 &bull; Dewitt A. Buckingham, III</span>
    </footer>

    <script>
        var container = document.querySelector('.content');
        var masonry = new Masonry( container, {
            // options
            "gutter": 24,
            "itemSelector": 'section'
        });
    </script>
</body>
</html>
