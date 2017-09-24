<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   Background_Music_Player_Lite
 * @author    Circlewaves Team <support@circlewaves.com>
 * @license   GPL-2.0+
 * @link      http://circlewaves.com
 * @copyright 2014 Circlewaves Team <support@circlewaves.com>
 */
?>

<div class="wrap bmplayer_options_page">
	
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<?php if( isset($_GET['settings-updated']) ) { ?>
	<div id="message" class="updated">
			<p><strong><?php _e('Settings saved.',$this->plugin_slug) ?></strong></p>
	</div>
	<?php } ?>
	
	<div id="poststuff">
	
		<div id="post-body" class="metabox-holder columns-2">
		
			<!-- main content -->
			<div id="post-body-content">
				<div class="meta-box-sortables ui-sortable">
					<div class="postbox">
						<div class="inside">
							<form action="options.php" method="POST">
								<?php settings_fields( 'bmplayer_settings' ); ?>
								<?php do_settings_sections( 'background-music-player-lite' ); ?>
								<?php submit_button(); ?>
							</form>									
						</div>	
					</div>
				</div>
			</div>
			<!-- end main content -->
			
			<!-- sidebar -->
			<?php include_once( 'sidebar-right.php' );?>
			<!-- end sidebar -->
			
		</div> 
		<!-- end post-body-->
		
		<br class="clear">
	</div>
	<!-- end poststuff -->
	
</div>