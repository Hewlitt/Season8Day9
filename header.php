<!doctype html>
<html>
    <head>
        <meta http-equiv="x-ua-compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">

        <title><?php bloginfo('name'); ?></title>
        
        <meta name="keywords" content="Technology Education, Technology, Education, Training, Library, Toronto, HTML, CSS,  JavaScript, PHP, Python, Android, Social Design">
        <meta name="description" content="This is a learning resource built at the YMC for participants of the YMC and anybody else who finds it useful.">
        <meta property="og:title" content="BNOTIONS">
        <meta property="og:url" content="http://bnotions.com">
        <meta property="og:image" content="http://bnotions.com/assets/BNOTIONS_logo.png">
        <meta property="og:description" content="Technology and Innovation">
        <meta property="og:type" content="company">
        <meta property="fb:admins" content="172004950,676480219">
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="BNOTIONS">
        <meta name="twitter:url" content="http://bnotions.com">
        <meta name="twitter:site" content="@bnotions">
        <meta name="twitter:image:src" content="http://bnotions.com/assets/BNOTIONS_logo.png">
        <meta name="twitter:description" content="Technology and Innovation">

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