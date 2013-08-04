<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Timelaph
 * @since Timelaph 1.2
 */

$up_options = upfw_get_options();
get_header();

?>

	<div id="container">

		<h1 id="branding">
		<a id="logo" href="<?php echo home_url(); ?>">
		<img src="<?php
		if($up_options->logo):
			echo $up_options->logo;
		endif;
		?>" alt="<?php esc_attr( bloginfo( 'name' ) ); ?>">
		</a>
		</h1>

		<?php if( $up_options->body_text ): ?>
			<p class="desc"><?php echo $up_options->body_text; ?></p>
		<?php endif; ?>

		<?php if( $up_options->custom_form ): ?>

		<?php echo $up_options->custom_form; ?>

		<?php else: ?>

		<p>Please embed an HTML subscription form from <a href="http://campaignmonitor.com">CampaignMonitor</a>, <a href="http://mailchimp.com">MailChimp</a>, <a href="http://madmimi.com">Mad Mimi</a>, or another email marketing service.</p>

		<?php endif; ?>

	</div>

	<?php wp_footer() ?>

</body>
</html>
