<!doctype html>
<html>
    <head>
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title><?php bloginfo('name'); ?></title>
        
        
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    </head>

    <body <?php body_class(); ?>>

        <div class="interface headerbg">
            <header>

                <h1>
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/images/ymc_logo.png" alt="<?php bloginfo('name'); ?>" />
                        :: {<?php bloginfo('description'); ?>}
                    </a>
                </h1>

            </header>

        </div> <!-- Header Background -->

        <div class="interface site_nav_bg">

            <nav class="site">
                <?php
                    // our old navigation functions 
                    // wp_list_pages(); 
                    // wp_list_categories(); 
                ?>

                <?php wp_nav_menu(); ?>

            </nav>

        </div>