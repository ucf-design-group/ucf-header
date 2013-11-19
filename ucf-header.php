<?php

/*
 * Plugin Name: UCF Header Bar
 * Plugin URI: http://github.com/ucf-design-group/ucf-header
 * Description: This plugin adds the UCF Header to all web pages.
 * Version: 2.0
 * Author: AJ Foster
 * Author URI: http://aj-foster.com/
 * License: None; use as you please!
 */


function ucf_header() {

?>
			<script type="text/javascript" id="ucfhb-script" src="http://universityheader.ucf.edu/bar/js/university-header.js"></script>
<?php
}
add_action('wp_footer', 'ucf_header');

?>