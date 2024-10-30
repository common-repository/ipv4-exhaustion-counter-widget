<?php
/*
	Plugin Name: IPv4 Exhaustion Counter
	Plugin URI: http://www.hauwaerts.be/software/wp-ipv4-exhaustion-counter
	Description: Wordpress IPv4 Exhaustion Counter Widget
	Version: 1.0
	Author: Geert Hauwaerts
	Author URI: http://www.hauwaerts.be

	Copyright 2009, Geert Hauwaerts <geert@hauwaerts.be>
*/

/*
	License:

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

function wp_ipv4_exhaustion_counter($args) {
	
	extract($args);
	
	echo $before_widget . $before_title . "Exhaustion Counter" . $after_title;
	echo "<script type='text/javascript' language='javascript' src='http://inetcore.com/project/ipv4ec/en-us/wolf_c.js'></script>";
	echo $after_widget;
}

function wp_ipv4_exhaustion_counter_init() {
	
	if (!function_exists('register_sidebar_widget')) {
		return;
	}
	
	register_sidebar_widget(__('WP IPv4 Exhaustion Counter'), 'wp_ipv4_exhaustion_counter');
}

add_action("plugins_loaded", "wp_ipv4_exhaustion_counter_init");
?>