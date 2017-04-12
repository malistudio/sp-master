<div class="row">
    <div id="sidebar-mid" class="columns" role="complementary">

        	<?php if ( is_active_sidebar( 'blogmidsec' ) ) : ?>

        		<?php dynamic_sidebar( 'blogmidsec' ); ?>

        	<?php else : ?>

        	<!-- This content shows up if there are no widgets defined in the backend. -->

        	<div class="alert help">
        		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
        	</div>

        	<?php endif; ?>

    </div>
</div>
