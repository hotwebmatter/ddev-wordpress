<?php
/**
 * #ddev-generated: Automatically generated WordPress settings file.
 * ddev manages this file and may delete or overwrite the file unless this comment is removed.
 * It is recommended that you leave this file alone.
 *
 * @package ddevapp
 */

/** Authentication Unique Keys and Salts. */
define( 'AUTH_KEY', 'SbnfFTejRzVOisnTBYKPinCizAdCFcbZBVfGaMvzmcpfwAGLFGoSFoOxFMSWiogv' );
define( 'SECURE_AUTH_KEY', 'CovBHENMJOgMlGuFsJRJuFOmpiDTUSQnInoUcQXswfzJMCpvacbMRDUQYHKgtbxO' );
define( 'LOGGED_IN_KEY', 'YvzEBQJEGCUkXyBwIgedUdhiHpRLOsXMtATdcxkqEXBhSGqnUqiCETwOjRIAoxwL' );
define( 'NONCE_KEY', 'VdBtnzAbyPplOzInyofUcsTrvwiPcajTjMlBjsjSXHleFCLvmnQsnlJyUwhagRwj' );
define( 'AUTH_SALT', 'vYJNkwltfrFfSnJaRUvclmnUvRqcRXdmEpCNQdSQQAanJLsuvIFzTzlneozzckca' );
define( 'SECURE_AUTH_SALT', 'cToKhxuVTxTSUxYBFRfKzwLCCDDrwujikLrRxBZtYjRnqvOSSJuWyNBrqvaFkPTp' );
define( 'LOGGED_IN_SALT', 'SIsCuBQkdvrTJOykRVuHWdGACraNCnfqZuhlQjWvrpoBaILadaAHDNDimjBXUAYC' );
define( 'NONCE_SALT', 'VDxWvpIusyuqxeUdkesIACjqTTvlEiCODCqJEGpsasqDEkRmIWOCvNoSwZjPWowA' );

/** Absolute path to the WordPress directory. */
defined( 'ABSPATH' ) || define( 'ABSPATH', dirname( __FILE__ ) . '/' );

// Include for settings managed by ddev.
$ddev_settings = dirname( __FILE__ ) . '/wp-config-ddev.php';
if ( is_readable( $ddev_settings ) && ! defined( 'DB_USER' ) && getenv( 'IS_DDEV_PROJECT' ) == 'true' ) {
	require_once( $ddev_settings );
}

/** Include wp-settings.php */
if ( file_exists( ABSPATH . '/wp-settings.php' ) ) {
	require_once ABSPATH . '/wp-settings.php';
}
