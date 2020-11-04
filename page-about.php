<?php
get_header();

while (have_posts()) {
    the_post();
?>
    <h1 class="aria-hidden">About</h1>
    <div class="content">
        <?php the_content(); ?>
    </div>
<?php
}
get_footer();
?>
