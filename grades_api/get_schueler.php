<?php
define('WP_USE_THEMES', false);
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");
$sum = $wpdb->get_var( $wpdb->prepare( "SELECT schueler_settings_value FROM schueler_settings WHERE schueler_settings_name = 'api_key'") );

if ($_GET['apikey'] == $sum)
{

	$query = "SELECT * FROM schueler";

	$result = $wpdb->get_row($query, ARRAY_A, 3);

	print_r($result);
}
?>