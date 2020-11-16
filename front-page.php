<?php
get_header();
?>

<section class="front-intro side-padding" style="
        background-image: url('<?php echo get_theme_file_uri('/images/bg/semi-tri.svg'); ?>');
        background-repeat: no-repeat;
        background-position-x: right;
        ">

    <h1 class="front-intro__heading">Websites for your brand identity</h1>
    <div class="front-intro__proposition front-intro__proposition--top">
        <h2>Design</h2>
        <p class="sub-heading">for your brand</p>
        <p>Show your flair and let the customers know you and your value proposition.</p>
        <div class="front-intro__bg-number">1</div>
    </div>
    <div class="front-intro__proposition front-intro__proposition--middle">
        <h2>Develop</h2>
        <p class="sub-heading">in cooperation</p>
        <p>We code your vision into reality. Follow along in each step.</p>
        <div class="front-intro__bg-number">2</div>
    </div>
    <div class="front-intro__proposition front-intro__proposition--bottom">
        <h2>Deploy</h2>
        <p class="sub-heading">your online presence</p>
        <p>Get your fresh new website up and running.</p>
        <div class="front-intro__bg-number">3</div>
    </div>
</section>
<div class="section-break" style="
        background-image: url('<?php echo get_theme_file_uri('/images/bg/striped-breaker.svg'); ?>');
        background-repeat: no-repeat;
        background-repeat-x: repeat;
        "></div>
<section class="front-section side-padding">
    <div class="bg-circle--outline"></div>
    <h2>Case studies</h2>
    <div class="case-container">
        <img class="image case__image" src="<?php echo get_theme_file_uri('/images/case/bookarena.png'); ?>" alt="Case of The Book arena">
        <div class="case__portfolio">
            <button class="front-button active">The Book Arena</button>
            <button class="front-button">hum.nu</button>
            <button class="front-button">Runner statistics</button>
            <button class="front-button">MDLE</button>
        </div>
        <div class="description">
            <p>Sleek look and feel for the book lovers out there. Review books and add favorites, this website handles registering
            and authenticating users as well as searching for the book they want. The Book Arena is built with backend components
            and an easy frontend interface.</p>
        </div>
    </div>
    <div class="bg-circle--full"></div>
</section>
<section class="front-section side-padding pt4">
    <img src="<?php echo get_theme_file_uri('/images/bg/puzzle-full.svg'); ?>" class="bg-image bg-image--tr" alt="" aria-hidden="true"/>
    <h2 class="mt4">Feature list</h2>
    <div class="description feature-box">
        <p id="feature--general" class="mt0">
            Learn more about the features we can build into your website: From a landing page to a full fledged content
            management system.
        </p>
        <p id="feature--landing-page" class="mt0 feature__description hidden" aria-hidden="true">
            Your value proposition in focus. Reveal your product to grow attention and turn interest into
            purchase.
        </p>
        <p id="feature--blog" class="mt0 feature__description hidden" aria-hidden="true">
            Regular content creation with a blog is a good way to build a relationship with your stakeholders and customers.
            It's also great for SEO purposes.
        </p>
        <p id="feature--contact" class="mt0 feature__description hidden" aria-hidden="true">
            It's good to have an email to be reached at. It's even better to have a contact form directly on your page.
            Minimize the hurdles for your customers to reach you.
        </p>
        <p id="feature--gallery" class="mt0 feature__description hidden" aria-hidden="true">
            Do you want to show off your work or let your customers know more about your business. A picture says more than
            a thousand words, show off them in a gallery on your website.
        </p>
        <p id="feature--logo" class="mt0 feature__description hidden" aria-hidden="true">
            Let your business identity shine with a logo tailored to your business. A logo is something unique yet simple:
            it speaks on who you are.
        </p>
        <p id="feature--design" class="mt0 feature__description hidden" aria-hidden="true">
            A visitor's impression of you is made within 8 seconds of visiting your website. So make the most of it!
            Web Design tailored to YOUR customers is the way to go.
        </p>
        <p id="feature--cms" class="mt0 feature__description hidden" aria-hidden="true">
            If you want to update content for your website a CMS is the way to go. More than just blogging, a CMS let's you
            add or edit any component of your website that you need.
        </p>
        <p id="feature--api" class="mt0 feature__description hidden" aria-hidden="true">
            Are you looking for more flexibility to your webservices. Perhaps you are looking to serve data to third-party apps,
            let's set up an API for your needs.
        </p>
    </div>
    <div class="feature-grid feature-grid--2col">
        <button id="landing-feature-btn" class="feature-grid__item front-button">
            <i class="fas fa-home"></i>
            <p>Landing Page</p>
        </button>
        <button id="blog-feature-btn" class="feature-grid__item front-button">
            <i class="fas fa-blog"></i>
            <p>Blog</p>
        </button>
        <button id="contact-feature-btn" class="feature-grid__item front-button">
            <i class="fas fa-envelope-open-text"></i>
            <p>Contact Form</p>
        </button>
        <button id="gallery-feature-btn" class="feature-grid__item front-button">
            <i class="far fa-images"></i>
            <p>Gallery</p>
        </button>
        <button id="logo-feature-btn" class="feature-grid__item front-button">
            <i class="fas fa-magic"></i>
            <p>Logo</p>
        </button>
        <button id="design-feature-btn" class="feature-grid__item front-button">
            <i class="fas fa-paint-brush"></i>
            <p>Web design</p>
        </button>
        <button id="cms-feature-btn" class="feature-grid__item front-button">
            <i class="fas fa-laptop-code"></i>
            <p>Custom CMS</p>
        </button>
        <button id="api-feature-btn" class="feature-grid__item front-button">
            <i class="fas fa-server"></i>
            <p>API</p>
        </button>
    </div>
</section>

<?php
get_footer();
?>
