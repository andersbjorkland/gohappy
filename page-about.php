<?php
get_header();

while (have_posts()) {
    the_post();
?>
<article class="content-wrap side-padding">
    <div class="content-container mb4">
        <h1 class="aria-hidden">About</h1>
        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
</article>
<?php
}
get_footer();
?>
