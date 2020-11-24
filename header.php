<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header-container">
    <header class="header">
        <a class="logo-container" href="<?php echo site_url(); ?>">
            <div class="aria-hidden">Home</div>
            <img class="logo header__logo header__logo--o08" src="<?php echo get_theme_file_uri('/images/logo.svg') ?>" alt="Back to home" />
            <div class="brand brand-container">
                <span class="brand brand__upper">Salve</span>
                <span class="brand brand__lower">digital</span>
            </div>
        </a>
        <nav class="nav">
            <div class="nav__item <?php if (is_front_page()) echo 'active'; ?>">
                <a class="aria-link" href="<?php echo site_url(); ?>">Home</a>
            </div>
            <div class="nav__item <?php if (get_post_type() === 'post') echo 'active'; ?>">
                <a class="aria-link" href="<?php echo site_url('/blog'); ?>">Blog</a>
            </div>
            <div class="nav__item <?php if (is_page('about')) echo 'active'; ?>">
                <a class="aria-link" href="<?php echo site_url('/about'); ?>">About</a>
            </div>
        </nav>
    </header>
</div>
