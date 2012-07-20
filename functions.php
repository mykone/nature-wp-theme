<?php

function pp_get_footer_widgets()
{
	pp_get_side_bar('footer_widget_1');
	pp_get_side_bar('footer_widget_2');
	pp_get_side_bar('footer_widget_3');
	pp_get_side_bar('footer_widget_4');
}

function pp_get_side_bar($id)
{
	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar($id);
}

function pp_widgets_init()
{
	if ( function_exists('register_sidebar') )
	{	
		register_sidebar( array(
			'name' => 'Primary Sidebar',
			'id' => 'primary_side_bar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
		
		register_sidebar( array(
			'name' => 'Footer Widget 1',
			'id' => 'footer_widget_1',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
		
		register_sidebar( array(
			'name' => 'Footer Widget 2',
			'id' => 'footer_widget_2',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
		
		
		register_sidebar( array(
			'name' => 'Footer Widget 3',
			'id' => 'footer_widget_3',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );
		
		register_sidebar( array(
			'name' => 'Footer Widget 4',
			'id' => 'footer_widget_4',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="rounded">',
			'after_title' => '</h2>',
		) );						
	}
}

function pp_theme_image($path)
{
	$path = get_theme_root_uri() . "/purple/images/" . $path;
	echo "<img src='$path' alt='path'/>";
}

function pp_get_menu()
{
	wp_list_pages('title_li=');
}

function pp_get_search_form()
{
	echo 'Search <input type="text" class="search-box"/>';
}


function pp_get_feauture_page($id)
{
	//file_get_contents("feature_$id.html");
	
	//$filepath = dirname(__FILE__) . DIRECTORY_SEPARATOR ."feature_$id.html";
	//$filepath = __DIR__ . DIRECTORY_SEPARATOR . "/wp-content/themes/purple/feature_$id.html";
	$filepath = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/purple/' ."feature_$id.html";
	
	$filepath = str_replace("\\","/",$filepath);
	
	if(file_exists($filepath)==1)
	{
		echo '<div class="feature-content content-curve-all drop-shadow"><div class="wrapper">' . file_get_contents($filepath) . '</div></div>';
	}
	else
	{
		echo "File does not exist: $filepath";
	}	
}

/** Register sidebars by running twentyten_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'pp_widgets_init' );