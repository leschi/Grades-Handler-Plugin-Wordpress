<?php
define('WP_USE_THEMES', false);
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");
$sum = $wpdb->get_var( $wpdb->prepare( "SELECT schueler_settings_value FROM schueler_settings WHERE schueler_settings_name = %s"), "api_key" );

if ($_GET['apikey'] == $sum)
{

if ($_GET['grade'] =='1')
{

	$wpdb->insert(
		$_GET['notentyp'],
		array(
			$_GET['notentyp'] . 'colschueler' => $_GET['schueler'],
			$_GET['notentyp'] . 'coltestdatum' => $_GET['testdatum'],
			$_GET['notentyp'] . 'colgrund' => $_GET['grund'],
			$_GET['notentyp'] . 'colpunkte' => $_GET['punkte'],
			$_GET['notentyp'] . 'colnotitz' => $_GET['notitz'],
			$_GET['notentyp'] . 'colfach' => $_GET['fach']
		),
		array(
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s'
		)
	);

}
elseif ($_GET['klass'])
{
    $wpdb->update(
        'schueler',
        array(
            'klasse' => $_GET['klasse']
        ),
        array( 'username' => $_GET['nickname'] ),
        array(
            '%s'
        ),
        array( '%s' )
    );
}
elseif ($_GET['test'])
{
    echo "exist";
}
else
{
	echo "error";
}
$rows = "";

}
