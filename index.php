<?php
global $up_options;
$lp_feedburner_url = "http://feeds2.feedburner.com/" . $up_options->feedburner;

get_header();

?>

	<div id="wrapper">
	
		<div id="container">
		
			<h1 id="branding">
			<a id="logo" href="<?php echo home_url(); ?>">
			<img src="
			<?php
					if($up_options->logo):
						echo $up_options->logo;
					endif;
			?>" alt="<?php esc_attr( bloginfo( 'name' ) ); ?>">
			</a>
			</h1>

			<?php if( $up_options->feedburner && $up_options->show_email_form ): ?>
			<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo $up_options->feedburner; ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
				
				<label for="email" class="inline"><?php _e( 'Enter your email address...', 'timelaph' ); ?></label>
				<input type="text" id="email" name="email">
				
			    <input type="hidden" value="<?php echo esc_attr( $up_options->feedburner ); ?>" name="uri">
			    <input type="hidden" name="loc" value="en_US">
			    
			    <button type="submit"><?php _e( 'Submit', 'timelaph' ); ?></button>
			</form>

			<?php endif; ?>
			
			<?php if( $up_options->body_text ): ?>
				<p><?php echo $up_options->body_text; ?></p>
			<?php endif; ?>

			<?php if( $up_options->show_rss == true ): ?>
				<p><a class="subscribe" href="<?php upfw_rss(); ?>" title="<?php echo esc_attr( get_bloginfo('name' ), 1) ?> <?php _e( 'RSS feed', 'timelaph' ); ?>" rel="alternate" type="application/rss+xml"><?php _e( 'Subscribe to our RSS feed', 'timelaph' ); ?></a> <?php _e( 'to stay updated on our progress.', 'timelaph' ); ?></p>
			<?php endif; ?>
			
		</div>
		
	</div>

	<?php wp_footer() ?>

</body>	
</html>
