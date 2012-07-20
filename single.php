<?php get_header(); ?>

<div id="p-canvas">
    
    <div id="top-section">
    	<div class="wrapper">
            <div id="logo-area">
                <?php pp_theme_image('logo.png')?>
            </div>
            <div id="menu">
            	<ul><?php pp_get_menu(); ?></ul>
            </div>
            <div id="search-form">
                 <?php pp_get_search_form()?>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    
    <div id="banner">
        <?php pp_theme_image('banners/banner_walking_sky.jpg')?>
    </div>
    
    <div id="content">
        <?php
        while ( have_posts() ) : the_post();
            echo '<h2>';
            the_title();
            echo '</h2>';
            the_content();
        endwhile;
        ?>
    </div>
    
    <div id="footer">
        <!--?php define('WP_USE_THEMES', false); get_footer(); ?-->
        &copy;Copyright 2012 PMS Ministry. All rights reserved<br />
        <a href="/wp-admin/">Admin</a>
    </div>  
</div>