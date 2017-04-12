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

				<article id="content-not-found">

					<header class="article-header">
						<h1><?php _e( 'Epic 404 - Page Not Found', 'jointswp' ); ?></h1>
					</header> <!-- end article header -->

					<section class="entry-content">
						<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
					</section> <!-- end article section -->

					<section class="search">
					    <p><?php get_search_form(); ?></p>
					</section> <!-- end search section -->

				</article> <!-- end article -->

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
