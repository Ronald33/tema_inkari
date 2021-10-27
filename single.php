<?php get_header(); ?>
<?php while(have_posts()): the_post(); ?>
<div class="post">
    <h3><?php echo get_the_title(); ?></h3>
    <p>
        <?php
            echo get_the_content();
        ?>
    </p>
</div>
<div class="comments">
    <?php comments_template(); ?>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>