<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">
    <a class="logo" href="<?php echo site_url(); ?>">
        <div class="aria-hidden">Home</div>
        <img class="logo header__logo" src="<?php echo get_theme_file_uri('/images/logo.svg') ?>" alt="Back to home" />
    </a>
    <nav class="nav">
        <a class="nav__item <?php if (is_home()) echo 'active'; ?>" href="<?php echo site_url(); ?>">
            <img class="nav__image" src="<?php echo get_theme_file_uri('/images/icons/House.svg')?>" alt="Go to Home">
            <div class="aria-link">Home</div>
        </a>
        <a class="nav__item" href="#">
            <img class="nav__image" src="<?php echo get_theme_file_uri('/images/icons/Portfolio.svg')?>" alt="Go to Portfolio">
            <div class="aria-link">Portfolio</div>
        </a>
        <a class="nav__item" href="#">
            <img class="nav__image" src="<?php echo get_theme_file_uri('/images/icons/Boxes.svg')?>" alt="Go to Blog">
            <div class="aria-link">Blog</div>
        </a>
        <a class="nav__item <?php if (is_page('about')) echo 'active'; ?>" href="<?php echo site_url('/about'); ?>">
            <img class="nav__image" src="<?php echo get_theme_file_uri('/images/icons/Person.svg')?>" alt="Go to About">
            <div class="aria-link">About</div>
        </a>
    </nav>
</header>