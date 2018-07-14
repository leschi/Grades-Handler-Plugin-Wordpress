<?php
#if ($_GET['pw'] == "heavenTV")
#{
require_once("../wp/wp-load.php");
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
?>