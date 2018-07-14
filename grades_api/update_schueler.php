<?php
#if ($_GET['pw'] == "heavenTV")
#{
define('WP_USE_THEMES', false);
require_once($_SERVER['DOCUMENT_ROOT'] . "/wp-load.php");
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
    echo "test";
}
$rows = "";

#}
