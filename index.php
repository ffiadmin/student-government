<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<header>
<h1 class="title"><?php the_title(); ?></h1>
</header>

<?php
//This constant will be defined if the book exchange plugin is activated
	echo !defined("FFI_BE_ACTIVE") ? "<section class=\"body left\">" : "<section class=\"body\">";
?>
<?php the_content(); ?>
</section>

<?php
//This constant will be defined if the book exchange plugin is activated
	if (!defined("FFI_BE_ACTIVE")) {
		get_sidebar();
	}
?>

<?php endwhile; else: ?> 
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>