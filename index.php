<?php get_header(); ?>

<div class="section-small-top text-center wrap clearfix">
	<!-- <h1 class="text-brand page-title h2-enhanced"><?php the_title(); ?></h1> -->
	<!-- <h1 class="text-brand page-title h3-enhanced">Maybe a nice place for Featured Post</h1> -->
	<div class="row featured-wrap">
		<?php
			// The Query
			//$query1 = new WP_Query( $args );
			$query1 = new WP_Query( array( 'category_name' => 'featured' ) );

			if ( $query1->have_posts() ) {
				// The Loop
				while ( $query1->have_posts() ) {
					$query1->the_post();

		?>
			<div class="medium-6 columns featured-img">
				<?php the_post_thumbnail('full'); ?>
			</div>
			<div class="medium-6 columns text-left">
				<h1 class="text-brand page-title"><?php the_title(); ?></h1>
				<?php get_template_part( 'parts/content', 'byline' ); ?>
				<?php the_content('<button class="tiny">' . __( 'Read more...', 'jointswp' ) . '</button>'); ?>
			</div>
		<?php

		/* Restore original Post Data
		 * NB: Because we are using new WP_Query we aren't stomping on the
		 * original $wp_query and it does not need to be reset with
		 * wp_reset_query(). We just need to set the post data back up with
		 * wp_reset_postdata().
		 */
				 }
				 wp_reset_postdata();
			}
		?>
	</div>
</div>
<!--
<div class="content-top">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
</div> -->

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">


			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid' ); ?>

				<?php endwhile; ?>
				<hr />

				<?php get_sidebar(blog); ?>
				<hr />

<?php

// The Query
//$query1 = new WP_Query( $args );
//$query2 = new WP_Query( array( 'cat' => '-4', 'posts_per_page' => '1' ) );

//$display_count = 1;
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
$offset = $paged * 4;
$query2 = new WP_Query( array(
	//'cat' => '-4',
	'posts_per_page' => '4',
	'paged' => $paged,
	'offset' => $offset
	) );

if ( $query2->have_posts() ) {
	// The Loop
	while ( $query2->have_posts() ) {
		$query2->the_post();
		get_template_part( 'parts/loop', 'archive' );
	}

	/* Restore original Post Data
	 * NB: Because we are using new WP_Query we aren't stomping on the
	 * original $wp_query and it does not need to be reset with
	 * wp_reset_query(). We just need to set the post data back up with
	 * wp_reset_postdata().
	 */
	wp_reset_postdata();
}
?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

		    </main> <!-- end #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
