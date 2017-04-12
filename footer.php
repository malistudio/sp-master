					<footer class="footer" role="contentinfo">
						<div id="inner-footer" class="row">
							<div class="large-12 medium-12 columns">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    				</div>
		    				<div class="row">
			    				<div class="column text-center">
			    					<a href="https://www.facebook.com/sharepopcom/">
			    					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/fb-icon.svg" class="svg soc-icon"></a>
			    					<a href="https://twitter.com/Sharepop_com">
			    					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/tw-icon.svg" class="svg soc-icon"></a>
			    					<a href="https://www.youtube.com/channel/UCtmxFGudS2fDBhJCq6tGr1w">
			    					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/yt-icon.svg" class="svg soc-icon"></a>
			    					<a href="https://www.instagram.com/sharepop_com/">
			    					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/insta-icon.svg" class="svg soc-icon"></a>
			    					<a href="https://www.linkedin.com/company/sharepop">
			    					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/ln-icon.svg" class="svg soc-icon"></a>
			    				</div>
		    				</div>
							<div class="large-12 medium-12 columns">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.<br />
								<?php _e( 'Made with', 'jointswp' ) ?>&nbsp;<span class="dashicons dashicons-heart"></span>&nbsp;<?php _e( 'in Berlin and Seoul.', 'jointswp' ) ?>
								</p>
							</div>
						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		</div> <!-- end .wrapper-outer -->
		<?php wp_footer(); ?>
		<script type="text/javascript">
			$(document).ready(function() {
		        $('.topbar').scrollupbar();
		    });
		</script>
	</body>
</html> <!-- end page -->
