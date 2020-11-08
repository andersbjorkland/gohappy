<?php
get_header();
while(have_posts()) {
    the_post();
    $mainId = get_the_ID();
?>
<div class="hero">

</div>
<div class="content-container">
    <div class="content">
        <div class="content__post">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
    <?php
    } ?>

    <div class="sidebar">
    <h2 class="sidebar__heading">Latest blog posts</h2>

    <?php
    $posts = new WP_Query([
        'posts_per_page' => 5
    ]);

    while ($posts->have_posts()) {
        $posts->the_post();
        ?>
        <div class="sidebar__item <?php if (get_the_ID() === $mainId) echo 'sidebar__item-active' ?>">
            <h3><?php echo get_the_title(); ?></h3>
            <time><?php echo get_the_date(); ?></time>
            <p><?php
                if (has_excerpt()) {
                    echo wp_trim_words(get_the_excerpt(), 20);
                } else {
                    echo wp_trim_words(get_the_content(), 20);
                }
            ?></p>
            <a href="<?php the_permalink(); ?>">Read more</a>
        </div>
    <?php }
    echo paginate_links();
    ?>

    </div>
</div><!-- End of .content-container -->

<?php get_footer(); ?>