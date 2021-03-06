<?php
/*Plugin Name: Grades Handler
Plugin URI: http://poechinger.de
Description: keine Beschreibung
Version: 1.0.0
Author: Leopold Pöchinger
License: GPL2*/

function my_plugin_menu() 
{
	add_menu_page('Grades Handler - Settings', 'Grades Handler', 'administrator', 'gradeshandler-settings', 'gradeshandler_settings_page', 'dashicons-schedule');
}

function gradeshandler_settings_page() 
{
	$link = plugins_url() . "/grades_handler/grades_api/";
	echo "<p>API-Link: " . $link . "</p>";
echo "
			<div class='wrap'>
			<form action='" . $_SERVER['PHP_SELF'] ."' method='POST'> 
			<input type='submit' value='User Aktualisieren' name='ja' /> 
			<br><br>
			<input type='submit' value='Datenbank Einrichten' name='db_new' /> 
			<br><br>
			<input type='submit' value='Datenbank Löschen' name='db_löschen' /> 
			</form>
			</div>";
}
include("types/deutsch.php");
include("types/prk.php");
include("types/schreibwerkstatt.php");
include("types/gspb.php");
include("types/gspb_plus.php");
include("types/deutsch_plus.php");

add_shortcode('deutsch', 'de');
add_shortcode('prk', 'prk');
add_shortcode('schreibwerkstatt', 'schreibwerkstatt');
add_shortcode('gspb', 'gspb');
add_shortcode('gspb_plus', 'gspb_plus');
add_shortcode('deutsch_plus', 'deutsch_plus');

add_action('admin_menu', 'my_plugin_menu');

function goback()
{
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}

if(isset($_POST['ja'])) 
{ 
   			global $wpdb;

			$customers = $wpdb->get_results("SELECT * FROM wp_usermeta WHERE meta_key LIKE 'learndash_group_users_%'");

			foreach($customers as $customer){

			

			$user_add = $wpdb->get_results("INSERT INTO schueler (username, klasse) VALUES('".get_user_meta($customer->user_id,'nickname',true)."', '') ON DUPLICATE KEY UPDATE username='';");

			}
			goback();
}  

if(isset($_POST['db_new'])) 
{ 
   			global $wpdb;

			$customers = $wpdb->get_results("CREATE TABLE IF NOT EXISTS `schueler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text COLLATE utf8_bin NOT NULL,
  `klasse` text COLLATE utf8_bin NOT NULL,
  `deutsch_sa` text COLLATE utf8_bin NOT NULL,
  `deutsch_mit` text COLLATE utf8_bin NOT NULL,
  `deutsch_wdh` text COLLATE utf8_bin NOT NULL,
  `deutsch_port` text COLLATE utf8_bin NOT NULL,
  `deutsch_sonst` text COLLATE utf8_bin NOT NULL,
  `gspb_sa` text COLLATE utf8_bin NOT NULL,
  `gspb_mit` text COLLATE utf8_bin NOT NULL,
  `gspb_wdh` text COLLATE utf8_bin NOT NULL,
  `gspb_port` text COLLATE utf8_bin NOT NULL,
  `gspb_sonst` text COLLATE utf8_bin NOT NULL,
  `deutsch_plus_sa` text COLLATE utf8_bin NOT NULL,
  `deutsch_plus_mit` text COLLATE utf8_bin NOT NULL,
  `deutsch_plus_wdh` text COLLATE utf8_bin NOT NULL,
  `deutsch_plus_port` text COLLATE utf8_bin NOT NULL,
  `deutsch_plus_sonst` text COLLATE utf8_bin NOT NULL,
  `prk_sa` text COLLATE utf8_bin NOT NULL,
  `prk_mit` text COLLATE utf8_bin NOT NULL,
  `prk_wdh` text COLLATE utf8_bin NOT NULL,
  `prk_port` text COLLATE utf8_bin NOT NULL,
  `prk_sonst` text COLLATE utf8_bin NOT NULL,
  `schreibwerkstatt_sa` text COLLATE utf8_bin NOT NULL,
  `schreibwerkstatt_mit` text COLLATE utf8_bin NOT NULL,
  `schreibwerkstatt_wdh` text COLLATE utf8_bin NOT NULL,
  `schreibwerkstatt_port` text COLLATE utf8_bin NOT NULL,
  `schreibwerkstatt_sonst` text COLLATE utf8_bin NOT NULL,
  `gspb_plus_sa` text COLLATE utf8_bin NOT NULL,
  `gspb_plus_mit` text COLLATE utf8_bin NOT NULL,
  `gspb_plus_wdh` text COLLATE utf8_bin NOT NULL,
  `gspb_plus_port` text COLLATE utf8_bin NOT NULL,
  `gspb_plus_sonst` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=95 ;");

			goback();
}

if(isset($_POST['db_löschen'])) 
{ 
   			global $wpdb;

			$customers = $wpdb->get_results("DROP TABLE schueler;");

			goback();
}

?>