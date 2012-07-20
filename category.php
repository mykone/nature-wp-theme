<?php 
/**
 * Template Name: Full-width, with sidebar
 * Description: A full-width template with sidebar
 *
 * @package WordPress
 * @subpackage purple
 * @since purple 1.0
 */

get_header(); ?>

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
    
    <!--div id="banner">
        <?php pp_theme_image('banners/banner_walking_sky.jpg')?>
    </div-->
    
    <div id="content" class="content-curve-all">
		<div class="wrapper">
		    <?php
		    while ( have_posts() ) : the_post();
		        echo '<h2>';
		        the_title();
		        echo '</h2>';
				echo '<b>Published by:</b> ' . the_author();
		        the_content();
		    endwhile;
		    ?>
		</div>
    </div>
	<?php pp_get_side_bar('footer_widget_1');?>
    
    <div id="footer">
        <!--?php define('WP_USE_THEMES', false); get_footer(); ?-->
        &copy;Copyright 2012 PMS Ministry. All rights reserved<br />
        <a href="/wp-admin/">Admin</a>
    </div>  
</div>
