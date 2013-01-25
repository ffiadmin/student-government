<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<header>
<h1 class="title"><?php the_title(); ?></h1>
</header>

<section class="body">
<?php the_content(); ?>
</section>

<?php endwhile; else: ?> 
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>