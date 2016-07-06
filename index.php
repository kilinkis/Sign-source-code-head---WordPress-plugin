<?php
/**
 * Plugin Name: Sign source code head
 * Plugin URI: http://kilinkis.me
 * Description: Add name to source code.
 * Version: 1.0.0
 * Author: kilinkis
 * Author URI: http://kilinkis.me
 * License: GPL2
 */

/* params: action, function and last but not least, priority:
   $priority (int) (Optional) Used to specify the order in which the functions associated with a particular action
   are executed. Lower numbers correspond with earlier execution, and functions with the same priority are executed
   in the order in which they were added to the action. Default value: 10 */

add_action('wp_head','sign_source_code_head', -1000);

function sign_source_code_head() {

	$output="\r\n    <!-- This website was developed by kilinkis - Visit me at kilinkis.me -->\r\n\r\n";

	echo $output;

}
