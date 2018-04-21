<?php get_header() ?>
	<?php if(have_posts()):
			while (have_posts()): 
			the_post();
	?>
	<?php the_title()?>
	<?php the_time('F j ,Y')?> at <?php the_time('g: i a')?> in <?php the_category()?>
	<?php the_content()?>
	<?php endwhile;?>
	<?php endif;?>
<?php get_footer()?>