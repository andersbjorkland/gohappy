<?php
get_header();
$content = getParsedContentArray();
?>
<div class="content-wrap side-padding sidebar-extended">
    <div class="content-container">
        <div class="content">
            <?php echo $content['main']; ?>
        </div>
    </div>
    <aside class="sidebar">
        <?php if (strlen($content['secondary']) > 0): ?>
        <h2 class="sidebar__heading">Latest blog posts</h2>
        <?php
        endif;
        echo $content['secondary'];
        echo paginate_links();
        ?>
    </aside>
</div>
<?php get_footer(); ?>