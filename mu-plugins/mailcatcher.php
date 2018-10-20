<?php
/**
 * Set up Mailcatcher
 *
 * @package PACKAGE_NAME
 */

add_action(
	'phpmailer_init',
	function( $phpmailer ) {
	    // phpcs:ignore
		$phpmailer->Host     = 'mailcatcher';
        // phpcs:ignore
		$phpmailer->Port     = 1025;
        // phpcs:ignore
		$phpmailer->SMTPAuth = false;
        // phpcs:ignore
		$phpmailer->isSMTP();
	}
);
