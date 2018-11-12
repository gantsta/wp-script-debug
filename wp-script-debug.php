/**
 * Debugging script for dumping an array of the registered scripts and stylesheets
 * Note: You can change 'handle' for 'src' to view a scripts' filename
 * 
 * @author		gantsta
 */
function print_scripts_styles() {
	$result = [];
	$result['scripts'] = [];
	$result['styles'] = [];

	// Print all loaded Scripts (JS)
	global $wp_scripts;
	foreach( $wp_scripts->queue as $script ) :
		$result['scripts'][] =  $wp_scripts->registered[$script]->handle . ";";
	endforeach;

	// Print all loaded Styles (CSS)
	global $wp_styles;
	foreach( $wp_styles->queue as $style ) :
		$result['styles'][] =  $wp_styles->registered[$style]->handle . ";";
	endforeach;

	print_r($result);
}
