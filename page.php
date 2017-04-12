<?php get_header(); ?>

<div class="section-small-top text-center wrap clearfix">
		<h1 class="text-brand page-title h2-enhanced"><?php the_title(); ?></h1>
	</div>
	<div class="content-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
    </div>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
