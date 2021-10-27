<h1>Página de inicio</h1>

<?php
if(have_posts()): 
    while(have_posts()): the_post();
?>
    <div class="post">
        <h3>
            <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
        </h3>
        <p>
            <?php
                echo get_the_excerpt();
            ?>
        </p>
    </div>
<?php
    endwhile;
else:
?>
    <p>No hay nada</p>
<?php
endif;
?>
<div class="pagination">
    <?php
        // previous_post_link();
    ?>
    <?php
        // next_post_link();
    ?>
    <?php
        echo paginate_links();
    ?>
</div>