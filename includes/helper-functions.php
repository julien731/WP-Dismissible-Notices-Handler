<?php
/**
 * Dismissible Notices Handler.
 *
 * LICENSE: This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 3 of the License, or (at
 * your option) any later version. This program is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * General Public License for more details. You should have received a copy of the GNU General Public License along
 * with this program. If not, see <http://opensource.org/licenses/gpl-license.php>
 *
 * @package   Dismissible Notices Handler/Helper Functions
 * @author    Julien Liabeuf <julien@liabeuf.fr>
 * @version   1.0
 * @license   GPL-2.0+
 * @link      https://julienliabeuf.com
 * @copyright 2016 Julien Liabeuf
 */

/**
 * The main function responsible for returning the unique Dismissible Notices Handler instance
 *
 * Use this function like you would a global variable, except without needing
 * to declare the global.
 *
 * @since 1.0
 * @return object Dismissible_Notices_Handler
 */

if ( ! function_exists( 'DNH' ) ) {
	function DNH() {
		return Dismissible_Notices_Handler::instance();
	}
}

if ( ! function_exists( 'dnh_register_notice' ) ) {
	/**
	 * Register a new notice
	 *
	 * @since 1.0
	 *
	 * @param string $id      Notice ID, used to identify it
	 * @param string $type    Type of notice to display
	 * @param string $content Notice content
	 * @param array  $args    Additional parameters
	 *
	 * @return bool
	 */
	function dnh_register_notice( $id, $type, $content, $args = array() ) {

		if ( ! function_exists( 'DNH' ) ) {
			return false;
		}

		/**
		 * Get the library running
		 */
		DNH();

		return DNH()->register_notice( $id, $type, $content, $args );

	}
}

if ( ! function_exists( 'dnh_restore_notice' ) ) {
	/**
	 * Restore a previously dismissed notice
	 *
	 * @since 1.0
	 *
	 * @param string $id ID of the notice to restore
	 *
	 * @return bool
	 */
	function dnh_restore_notice( $id ) {

		if ( ! function_exists( 'DNH' ) ) {
			return false;
		}

		/**
		 * Get the library running
		 */
		DNH();

		return DNH()->restore_notice( $id );

	}
}

if ( ! function_exists( 'dnh_is_dismissed' ) ) {
	/**
	 * Check if a notice has been dismissed
	 *
	 * @since 1.0
	 *
	 * @param string $id ID of the notice to check
	 *
	 * @return bool
	 */
	function dnh_is_dismissed( $id ) {

		if ( ! function_exists( 'DNH' ) ) {
			return false;
		}

		/**
		 * Get the library running
		 */
		DNH();

		return DNH()->is_dismissed( $id );

	}
}
