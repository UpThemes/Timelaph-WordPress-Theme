<?php get_header(); ?>

	<div id="wrapper">
	
		<div id="container">
		
			<div id="branding">
			<a id="logo" href="<?php echo home_url(); ?>">
			<img src="
			<?php
					if($up_options->logo):
						echo $up_options->logo;
					endif;
			?>" alt="<?php esc_attr( bloginfo( 'name' ) ); ?>">
			</a>
			</div>

			<h1><?php _e( '404: Page Not Found', 'timelaph' ); ?></h1>
			<p><?php _e( 'Oops. It appears you\'ve stumbled into a black hole.', 'timelaph' ); ?></p>
			
		</div>
		
	</div>

	<?php wp_footer() ?>

</body>
</html>