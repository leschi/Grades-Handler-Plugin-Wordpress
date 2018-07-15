<?php
define('WP_USE_THEMES', false);
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");
$sum = $wpdb->get_var( $wpdb->prepare( "SELECT schueler_settings_value FROM schueler_settings WHERE schueler_settings_name = 'api_key'") );

if ($_GET['apikey'] == $sum)
{

if ($_GET['grade'] =='1')
{
	$wpdb->show_errors();
	$wpdb->insert(
		$_GET['notentyp'],
		array(
			$_GET['notentyp'] . 'col_schueler' => $_GET['schueler'],
			$_GET['notentyp'] . 'col_testdatum' => $_GET['testdatum'],
			$_GET['notentyp'] . 'col_grund' => $_GET['grund'],
			$_GET['notentyp'] . 'col_punkte' => $_GET['punkte'],
			$_GET['notentyp'] . 'col_notitz' => $_GET['notitz'],
			$_GET['notentyp'] . 'col_fach' => $_GET['fach']
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
