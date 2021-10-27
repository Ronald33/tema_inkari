<?php
get_header();
get_template_part('page-header');
?>

<div class="container my-5 p-5 z-depth-1 page-section white-text">
    <?=the_content();?>
</div>

<?php
get_footer();
?>