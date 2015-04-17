<?php
// create custom plugin settings menu
add_action('admin_menu', 'estranged_create_menu');

function estranged_create_menu() {

	//create new submenu
	add_submenu_page( 'themes.php', 'Estranged Theme Options', 'Theme Options', 'administrator', __FILE__, 'estranged_settings_page');

	//call register settings function
	add_action( 'admin_init', 'estranged_register_settings' );
}

function estranged_register_settings() {
	//register our settings
	register_setting( 'estranged-settings-group', 'estranged_logo' );	
	register_setting( 'estranged-settings-group', 'estranged_github' );
	register_setting( 'estranged-settings-group', 'estranged_linkedIn' );
    register_setting( 'estranged-settings-group', 'estranged_wordpress' );		
	register_setting( 'estranged-settings-group', 'estranged_twitter' );
    register_setting( 'estranged-settings-group', 'estranged_pinterest' );
	register_setting( 'estranged-settings-group', 'estranged_facebook' );
}

function estranged_settings_page() {

?>

<div class="wrap">
<h2>Estranged Theme Settings</h2>

<form id="landingOptions" method="post" action="options.php">
    <?php settings_fields( 'estranged-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Logo:</th>
        <td>
       		<input type="text" name="estranged_logo" value="<?php print get_option('estranged_logo'); ?>" /><br/>
       		*Upload using the Media Uploader and paste the URL here.
       	</td>
       	</tr>
       	
       	
        <tr valign="top">
        <th scope="row">GitHub Link:</th>
        <td>
            <input type="text" name="estranged_github" value="<?php print get_option('estranged_github'); ?>" />
        </td>
        </tr>
        
        <tr valign="top">
        <th scope="row">LinkedIn Link:</th>
        <td>
            <input type="text" name="estranged_linkedIn" value="<?php print get_option('estranged_linkedIn'); ?>" />
        </td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Wordpress Link:</th>
        <td>
            <input type="text" name="estranged_wordpress" value="<?php print get_option('estranged_wordpress'); ?>" />
        </td>
        </tr>
        
                
        <tr valign="top">
        <th scope="row">Twitter Link:</th>
        <td>
       		<input type="text" name="estranged_twitter" value="<?php print get_option('estranged_twitter'); ?>" />
       	</td>
		</tr>
		
		
        <tr valign="top">
        <th scope="row">Pinterest Link:</th>
        <td>
            <input type="text" name="estranged_pinterest" value="<?php print get_option('estranged_pinterest'); ?>" />
        </td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Facebook Link:</th>
        <td>
       		<input type="text" name="estranged_facebook" value="<?php print get_option('estranged_facebook'); ?>" />
       	</td>
        </tr>

    </table>
    <p class="submit">
    	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
    </p>

</form>
</div>
<?php } ?>
