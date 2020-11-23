<?php
get_header();

$caseProjects = new WP_Query([
    'posts_per_page' => 4,
    'post_type' => 'project',
    'order' => 'ASC'
]);


$buttons = '';
$images = '';
$descriptions = '';
$iteration = 0;

while ($caseProjects->have_posts()) {
	$caseProjects->the_post();

	$projectTitles[] = get_the_title();
	$projectContents[] = get_the_content();
	$projectImages[] = get_the_post_thumbnail('smallCase');

	if ($iteration === 0) {
		$buttons .= '<button id="case-button-' . $iteration . '" class="front-button active" data-target="' . $iteration .'">'
                    . get_the_post_thumbnail(get_the_ID(), 'selfPortrait', ['class' => 'image case__image--button'])
                    . '<span class="case-button__title">' . get_the_title() . '</span>' .
                    '</button>';
		$images .= get_the_post_thumbnail(get_the_ID(), 'smallCase', ['class' => 'image case__image', 'id' => 'case-image-' . $iteration]);
        $descriptions .=
            '<div id="case-description-'. $iteration . '" class="case-description">
                <span class="md-show sub-heading">' . get_the_title() .'<br/></span>
                <p>' . get_the_content() . '</p>
            </div>';
	} else {
		$buttons .= '<button id="case-button-' . $iteration . '" class="front-button" data-target="' . $iteration .'">'
		            . get_the_post_thumbnail(get_the_ID(), 'selfPortrait', ['class' => 'image case__image--button'])
		            . '<span class="case-button__title">' . get_the_title() . '</span>' .
		            '</button>';
		$images .= get_the_post_thumbnail(get_the_ID(), 'smallCase', ['class' => 'image case__image hidden', 'id' => 'case-image-' . $iteration]);
		$descriptions .=
			'<div id="case-description-'. $iteration . '" class="case-description hidden">
                    <span class="md-show sub-heading">' . get_the_title() .'<br/></span>
                    <p>' . get_the_content() . '</p>
            </div>';
	}
	//$images .= '<img class="image case__image" src="' . the_post_thumbnail_url('smallCase') .  '" alt="Case of The Book arena">';

	$iteration++;
}

?>

<style>

    .striped {
        background-image: url('<?php echo get_theme_file_uri('/images/bg/striped-breaker.svg'); ?>');
        background-repeat: no-repeat;
        background-repeat-x: repeat;
    }

    @media screen and (min-width: 645px) {
        .section-break--sm-screen {
            background-image: none;
        }
    }
</style>

<!-- Top section -->
<section class="front-intro side-padding">
    <div class="content-container">
        <div class="front-intro__heading-container">
            <h1 class="front-intro__heading">Websites for your brand identity</h1>
            <p class="front-intro__subheading">Improved professional online presence</p>
            <a class="button button__contact" href="#contact-heading"><i class="fas fa-paper-plane"></i>Contact</a>
        </div>
        <div class="front-intro__proposition-container">
            <div id="design-proposition" class="front-intro__proposition front-intro__proposition--top">
                <div class="front-intro__proposition-header">
                    <h2>Design</h2>
                    <p class="sub-heading">for your brand</p>
                </div>
                <div class="front-intro__proposition-content">
                    <img id="design-proposition-img" class="front-intro__proposition-image" src="/wp-content/themes/gohappy/images/propositions/design-sketch.png" alt="Sketch up a design" />
                    <p>Show your flair and let the customers know you and your value proposition.</p>
                </div>
                <div class="front-intro__bg-number">1</div>
            </div>
            <div id="develop-proposition" class="front-intro__proposition front-intro__proposition--middle">
                <div class="front-intro__proposition-header">
                    <h2>Develop</h2>
                    <p class="sub-heading">in cooperation</p>
                </div>
                <div class="front-intro__proposition-content">
                    <img id="develop-proposition-img" class="front-intro__proposition-image" src="/wp-content/themes/gohappy/images/propositions/cooperation.png" alt="Handshake" />
                    <p>We code your vision into reality. Follow along in each step.</p>
                </div>
                <div class="front-intro__bg-number">2</div>
            </div>
            <div id="deploy-proposition" class="front-intro__proposition front-intro__proposition--bottom">
                <div class="front-intro__proposition-header">
                    <h2>Deploy</h2>
                    <p class="sub-heading">your online presence</p>
                </div>
                <div class="front-intro__proposition-content">
                    <img id="deploy-proposition-img" class="front-intro__proposition-image" src="/wp-content/themes/gohappy/images/propositions/deployment.png" alt="Computer with code" />
                    <p>Get your fresh new website up and running.</p>
                </div>
                <div class="front-intro__bg-number">3</div>
            </div>
        </div>
    </div>
</section>
<div class="striped section-break section-break--sm-screen"></div>

<!-- Portfolio section -->
<section class="front-section side-padding pt2">
    <div class="content-container">
        <div class="bg-circle--outline"></div>
        <h2>Case studies</h2>
        <div class="case-responsive-container">
            <div class="case-container">
	            <?php echo $images ?>
                <?php echo $descriptions ?>
                <div class="case__portfolio">
                    <?php echo $buttons; ?>
                </div>
            </div>
        </div>
        <div class="bg-circle--full"></div>
    </div>
</section>

<div class="image bg-image--breaker-full"></div>
<!-- Features section -->
<section class="front-section side-padding">
    <div class="content-container mt6">
        <img src="<?php echo get_theme_file_uri('/images/bg/puzzle-full.svg'); ?>" class="bg-image bg-image--tr" alt="" aria-hidden="true"/>
        <div id="features-container" class="feature-container">
            <h2>Feature list</h2>
            <div class="description feature-box">
                <p id="feature--general" class="mt0">
                    Learn more about the features we can build into your website: From a landing page to a full fledged content
                    management system.
                </p>
            </div>
            <div class="feature-grid">
                <button id="landing-feature-btn" class="feature-grid__item front-button">
                    <i class="fas fa-home"></i>
                    Landing Page
                </button>
                <button id="blog-feature-btn" class="feature-grid__item front-button">
                    <i class="fas fa-blog"></i>
                    Blog
                </button>
                <p id="feature--landing-page" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                    <span class="md-show sub-heading">Landing Page<br/></span>
                    Your value proposition in focus. Reveal your product to grow attention and turn interest into
                    purchase.
                </p>
                <p id="feature--blog" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                    <span class="md-show sub-heading">Blog<br/></span>
                    Regular content creation with a blog is a good way to build a relationship with your stakeholders and customers.
                    It's also great for SEO purposes.
                </p>


                <button id="contact-feature-btn" class="feature-grid__item front-button">
                    <i class="fas fa-envelope-open-text"></i>
                    Contact Form
                </button>
                <button id="gallery-feature-btn" class="feature-grid__item front-button">
                    <i class="far fa-images"></i>
                    Gallery
                </button>
                <p id="feature--contact" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                    <span class="md-show sub-heading">Contact Form<br/></span>
                    It's good to have an email to be reached at. It's even better to have a contact form directly on your page.
                    Minimize the hurdles for your customers to reach you.
                </p>
                <p id="feature--gallery" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                    <span class="md-show sub-heading">Gallery<br/></span>
                    Do you want to show off your work or let your customers know more about your business. A picture says more than
                    a thousand words, show off them in a gallery on your website.
                </p>


                <button id="logo-feature-btn" class="feature-grid__item front-button">
                    <i class="fas fa-magic"></i>
                    Logo
                </button>
                <button id="design-feature-btn" class="feature-grid__item front-button">
                    <i class="fas fa-paint-brush"></i>
                    Web design
                </button>
                <p id="feature--logo" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                    <span class="md-show sub-heading">Logo<br/></span>
                    Let your business identity shine with a logo tailored to your business. A logo is something unique yet simple:
                    it speaks on who you are.
                </p>
                <p id="feature--design" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                    <span class="md-show sub-heading">Web Design<br/></span>
                    A visitor's impression of you is made within 8 seconds of visiting your website. So make the most of it!
                    Web Design tailored to YOUR customers is the way to go.
                </p>


                <button id="cms-feature-btn" class="feature-grid__item front-button">
                    <i class="fas fa-laptop-code"></i>
                    Custom CMS
                </button>
                <button id="api-feature-btn" class="feature-grid__item front-button">
                    <i class="fas fa-server"></i>
                    API
                </button>
                <p id="feature--cms" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                    <span class="md-show sub-heading">Custom CMS<br/></span>
                    If you want to update content for your website a CMS is the way to go. More than just blogging, a CMS let's you
                    add or edit any component of your website that you need.
                </p>
                <p id="feature--api" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                    <span class="md-show sub-heading">API<br/></span>
                    Are you looking for more flexibility to your webservices. Perhaps you are looking to serve data to third-party apps,
                    let's set up an API for your needs.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Technologies section -->
<section class="front-section side-padding">
    <div class="content-container">
        <div id="technologies-container" class="feature-container">
        <h2>Technologies</h2>
        <div class="description feature-box">
            <p id="tech--general" class="mt0">
                If you have a preference, or are of a curious minds, have a glimpse at the technologies used to build a website.
            </p>
        </div>
        <div class="feature-grid feature-grid--2col">
            <button id="wordpress-tech-btn" class="feature-grid__item front-button">
                <i class="fab fa-wordpress"></i>
                WordPress
            </button>
            <button id="symfony-tech-btn" class="feature-grid__item front-button">
                <i class="fab fa-symfony"></i>
                Symfony
            </button>
            <p id="tech--wordpress" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                <span class="md-show sub-heading">WordPress<br/></span>
                WordPress is perfect for handling blog writing and editing, but can be expanded with many other features.
            </p>
            <p id="tech--symfony" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                <span class="md-show sub-heading">Symfony<br/></span>
                Symfony is a very flexible system to build your backend. It's easy to expand with a blogging feature as well
                as API if that is needed.
            </p>


            <button id="database-tech-btn" class="feature-grid__item front-button">
                <i class="fas fa-server"></i>
                Database
            </button>
            <button id="php-tech-btn" class="feature-grid__item front-button">
                <i class="fab fa-php"></i>
                PHP
            </button>
            <p id="tech--database" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                <span class="md-show sub-heading">Database<br/></span>
                For most content management, a database is needed. MySQL and the related MariaDB can handle huge sets of data.
                When working with WordPress or Symfony, a database will most often be used to store data.
            </p>
            <p id="tech--php" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                <span class="md-show sub-heading">PHP<br/></span>
                PHP is the backend language of choice for many web applications. WordPress and Symfony both uses PHP, and the
                language itself offers many features.
            </p>

            <button id="html-tech-btn" class="feature-grid__item front-button">
                <i class="fab fa-html5"></i>
                HTML
            </button>
            <button id="css-tech-btn" class="feature-grid__item front-button">
                <i class="fab fa-css3"></i>
                CSS
            </button>
            <p id="tech--html" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                <span class="md-show sub-heading">HTML<br/></span>
                All websites are built with a structure for its content. HTML is the technology used to do this. The structure
                gives meaning to the content and needs to be maintained to be relevant for search engines.
            </p>
            <p id="tech--css" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                <span class="md-show sub-heading">CSS<br/></span>
                The beauty and the readability of a website depends on great style. CSS is used to provide the style. To write
                CSS even faster and maintainable, a language like SASS is used.
            </p>

            <button id="js-tech-btn" class="feature-grid__item front-button">
                <i class="fab fa-js"></i>
                JS
            </button>
            <button id="react-tech-btn" class="feature-grid__item front-button">
                <i class="fab fa-react"></i>
                React
            </button>
            <p id="tech--js" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                <span class="md-show sub-heading">JavaScript<br/></span>
                For improved user experience, a language like JavaScript is used. This provides the behaviour to a website.
                It allows for text or images to be swapped by the press of a button.
            </p>
            <p id="tech--react" class="mt0 feature__description cw2 hidden" aria-hidden="true">
                <span class="md-show sub-heading">React<br/></span>
                If visitors are expected to interact a lot with the website, a library and a tool like React and Redux can be
                used to create a seamless user experience.
            </p>
        </div>
        <img src="<?php echo get_theme_file_uri('/images/bg/puzzle-outline.svg'); ?>" class="bg-image bg-image--bl" alt="" aria-hidden="true"/>
    </div>
    </div>
</section>

<!-- Contact section -->
<section class="front-section side-padding pt4 pb4">
    <img src="<?php echo get_theme_file_uri('/images/bg/simple-breaker.svg'); ?>" class="bg-image bg-image--tl bg-image--breaker" alt="" aria-hidden="true"/>
    <div class="content-container mt4">
        <div class="contact-container">
            <h2 id="contact-heading" class="contact-heading">Contact</h2>
            <?php
                echo apply_shortcodes('[contact-form-7 id="50" title="Contact form 1" html_class="contact__form"]');
             ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>
