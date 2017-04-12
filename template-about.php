<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

	<div class="section-small-top text-center wrap clearfix">
		<h1 class="text-brand page-title h2-enhanced"><?php the_title(); ?></h1>
	</div>
	<div class="content-top">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/backgrounds/triangle-quadrant.svg" class="svg triangle-quadrant">
    </div>
	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="medium-10 medium-centered large-8 columns" role="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'content' ); ?>

				<?php endwhile; endif; ?>

			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

	<div class="row expanded">
		<div class="section-berlin mt-2">
			<h3 class="h4"><strong>Berlin Office</strong></h3>
		    <p class="text-100">
		        SADH Internet GmbH<br>
		        Rosenstrasse 17<br>
		        10178 Berlin, Germany
	      	</p>
			<p class="text-100">
				<a href="mailto:berlin@sharepop.com"> berlin@sharepop.com </a>
			</p>
		</div>
		<div class="section-seoul">
			<h3 class="h4"><strong>Seoul Office</strong></h3>
			<p class="text-100">
				SharePop APAC<br>
				3F Sambo Bldg 5 Teheran-ro 19-gil<br>
				Gangnam-gu<br>
				Seoul 135-911 Korea
			</p>
			<p class="text-100">
				<a href="mailto:seoul@sharepop.com"> seoul@sharepop.com </a>
			</p>
		</div>
	</div>

<?php get_footer(); ?>
