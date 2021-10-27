<!doctype html>
<html <?php language_attributes();?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php wp_head(); ?>
    </head>
    <body>

        <div id="content">
            <?php
            if(has_nav_menu('main_menu')):
            ?>
                <!-- RMenu -->
                <div class="rmenu fixed-top">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            
                            <?php
                            $logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                            if (has_custom_logo())
                            {
                            ?>
                                <a class="navbar-brand" href="<?=get_home_url();?>" target="_self">
                                    <img src="<?=$logo[0];?>" alt="<?=get_bloginfo('name');?>">
                                </a>
                            <?php
                            }
                            else
                            {
                            ?>
                                <h2 class="h2 white-text"><?=get_bloginfo('name');?></h2>
                            <?php
                            }
                            ?>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <?php
                            wp_nav_menu([
                                'theme_location' => 'main_menu',
                                'container' => 'div', 
                                'container_id' => 'main-menu', 
                                'container_class' => 'collapse navbar-collapse', 
                                'menu_class' => 'navbar-nav ml-auto', 
                                'walker' => new WP_Bootstrap_Navwalker()
                            ]);
                            ?>
                        </nav>
                    </div>
                </div>
                <!-- End RMenu -->
            <?php
            endif;
            ?>