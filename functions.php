<?php
add_action( 'after_setup_theme', 'mnmlsm_setup' );
if ( ! function_exists( 'mnmlsm_setup' ) ):
function mnmlsm_setup() {
	add_action('admin_menu', 'mnmlsm_theme_options_page_init');
}
endif; // mnmlsm_setup

function mnmlsm_theme_options() {
	if(isset($_POST['submit'])){
		 if(update_option("mnmlsm-theme-options",json_encode($_POST))){
		 	?>
			<div id="message" class="updated">
			  <p>Settings are updated.</p>
			</div>
		 	<?php
		 }
	}
	$blog_options=json_decode(get_option("mnmlsm-theme-options"));
	?>
<form action="?page=mnmlsm_ayarlar" method="post">
	<div  class="wrap">
		<h2>mnmlsm Theme Options</h2>
		<table class="form-table">
			<tbody>
			    <tr valign="top">
			    	<th scope="row">
						<label for="say-hello">Say Hello</label>
			      	</th>
			    	<td>
						<input type="text" id="say-hello" name="sayHello" value="<?php echo $blog_options->sayHello;?>" placeholder="Say Hello">
			    	</td>
			    </tr>
			    <tr valign="top">
			    	<th scope="row">
			        	<label for="twitter">Twitter</label>
					</th>
			    	<td>
			    		<input type="text" id="twitter" name="twitter" value="<?php echo $blog_options->twitter;?>" placeholder="RSS Feed">
			        </td>
			    </tr>
			</tbody>
		</table>
		<button type="submit" name="submit" class="button-primary">Gönder</submit>
	</div>
</form>
	<?php
}
function mnmlsm_theme_options_page_init() {
	add_submenu_page( 'themes.php',"Ayarlar","Ayarlar","edit_theme_options","mnmlsm_ayarlar","mnmlsm_theme_options");
}


?>