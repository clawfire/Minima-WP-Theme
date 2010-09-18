<?php
/**
 * @package WordPress
 * @subpackage minima_Theme
 */
 
?>
<?php get_header();?>
<div id="wrapper">
	<?php get_sidebar();?>
	<?php if (have_posts()) : while (have_posts()) : the_post();?>
				<div class="post">
					<?php the_date('d F Y', '<div class="date">', '</div>'); ?>
					<a href="<?php the_permalink();?>" title="<?php the_title();?>"><h2 class="title"><?php the_title();?></h2></a>
					<a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_post_thumbnail();?></a>
					<?php the_excerpt();?>
					<div class="author"><?php the_author(); ?></div>
					<?php the_tags('<div class="tags">', ', ', '</div>'); ?>
					&nbsp;
				</div>
			<?php endwhile;endif;wp_reset_query();?>
</div>
<?php get_footer();?>