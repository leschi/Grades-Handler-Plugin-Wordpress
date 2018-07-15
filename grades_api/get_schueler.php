<?php
define('WP_USE_THEMES', false);
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");
$sum = $wpdb->get_var( $wpdb->prepare( "SELECT schueler_settings_value FROM schueler_settings WHERE schueler_settings_name = 'api_key'") );
if ( $_GET['apikey'] == $sum ) {
	if ( $_GET['type'] == '1' ) {

		$query = "SELECT * FROM schueler";

		$result = $wpdb->get_results( $query );

		echo json_encode( $result );

	} elseif ( $_GET['type'] == 'mitarbeit' ) {

		$query = "SELECT mit.*, faecher.name FROM schueler_mitarbeit AS mit LEFT OUTER JOIN faecher ON mit.schueler_mitarbeitcol_fach=faecher.id WHERE schueler_mitarbeitcol_schueler = " . $_GET ['schueler'];

		$result = $wpdb->get_results( $query );

		echo json_encode( $result );
	}
}
?>