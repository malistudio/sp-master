<?php get_header(); ?>

	<div class="section-small-top text-center wrap clearfix">
		<h1 class="text-brand page-title h3"><?php _e( 'Search Results for:', 'jointswp' ); ?></h1>
		<h3 class="text-brand page-title h1"><?php echo esc_attr(get_search_query()); ?></h3>
	</div>
	<div class="content-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
    </div>

	<div id="content">

		<div id="inner-content" class="row">

			<main id="main" class="large-8 medium-8 columns first" role="main">
				<header>
					<h6 class="archive-title"><?php _e( 'Search Results for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h6>
				</header>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

			    <?php endif; ?>

		    </main> <!-- end #main -->

		    <?php //get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
