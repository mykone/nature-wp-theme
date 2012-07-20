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
    
    <div id="content" class="content-curve-all">
       <div class="wrapper features">
		   <?php pp_get_feauture_page(1)?>
           <?php pp_get_feauture_page(2)?>
           <?php pp_get_feauture_page(3)?>
       </div>
       <div class="clear"></div>
    </div>
    
	<div id="below-content" class="content-curve-all">
        <div class="wrapper">
		<?php pp_get_footer_widgets(); ?>
        </div>
    </div>
    <div class="clear"></div>
    <div id="footer">
        <!--?php define('WP_USE_THEMES', false); get_footer(); ?-->
        &copy;Copyright 2012 PMS Ministry. All rights reserved | <a href="/wp-admin/">Admin</a> | Privacy
    </div>  
</div>