<?php
define('WP_USE_THEMES', false);
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");
$sum = $wpdb->get_var( $wpdb->prepare( "SELECT schueler_settings_value FROM schueler_settings WHERE schueler_settings_name = 'api_key'") );

if ($_GET['apikey'] == $sum)
{

if ($_GET['grade'] =='1')
{

    $wpdb->update(
        'schueler',
        array(
            $_GET['fach'] => $_GET['note']
        ),
        array( 'id' => $_GET['nickname'] ),
        array(
            '%s'
        ),
        array( '%s' )
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
$rows = "";

}
