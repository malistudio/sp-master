<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="topbar">
  <div class="top-bar row" id="top-bar-menu">

  	<div class="top-bar-left float-left">
  		<button class="menu-icon show-for-small-only" type="button" data-toggle="off-canvas">
      <?php //_e('MENU', 'jointswp') ?>
      </button>
  		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/sp-logo-white.svg" class="show-for-medium" width="150"><?php //bloginfo('name'); ?></a>
  	</div>

    <div class="top-bar-right show-for-small-only">
      <?php get_template_part( 'parts/nav', 'addon' ); ?>
    </div>

    <div class="top-bar-right show-for-medium">
  		<?php joints_top_nav(); ?>
  	</div>

  </div>
</div>
