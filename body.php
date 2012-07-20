<?php
if ( have_posts() ){
	while ( have_posts() )
	{
	 	the_post();
	}
}
else
{	
 	_e('Sorry, no posts matched your criteria.');
}