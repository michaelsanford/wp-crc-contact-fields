<?php
/**
 * @package CRC_Contact_Fields
 * @version 0.9
 */

/**
 * Plugin Name: CRC Contact Fields
 * Plugin URI: https://github.com/robo-crc/wp-crc-contact-fields
 * Description: Adds additional contact fields relevant to CRC's WordPress site
 * Author: Michael Sanford
 * Version: 0.9
 * Author URI: http://michaelsanford.com
 */

/**
 * @param array $user_contact
 * @return array
 */
function modify_user_contact_methods($user_contact) {

	/* Add school */
	$user_contact['school'] = __('School');

	return $user_contact;
}

/**
 * Hook
 */
add_filter('user_contactmethods', 'modify_user_contact_methods');
