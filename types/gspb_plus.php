<?php
function gspb_plus()
{
	echo "<style type='text/css'>
			.gspb_plus_noten{
				width: 500px;
			}
			</style>";
		echo "<div class='gspb_plus_noten'>";
		global $current_user;
		get_currentuserinfo();
		$name = $current_user->user_login;
		global $wpdb;
		$customers = $wpdb->get_row("SELECT gspb_plus_sa,gspb_plus_mit,gspb_plus_wdh,gspb_plus_port,gspb_plus_sonst FROM schueler Where username ='".$name."';");
		#begin Table GSPB_PLUS SA
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB+ Schularbeiten</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Testdatum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
$teile = explode("}", $customers->gspb_plus_sa);
		
		foreach($teile as $customer){
		if ($customer != "") {
		list($testdatum, $datumeintrag, $grund, $punkte, $notiz) = explode("^", $customer);
		
		echo "<tr>";
		echo "<td>".$testdatum."</td>";
		echo "<td>".$grund."</td>";
		echo "<td>".$punkte."</td>";
		echo "<td>".$notiz."</td>";
		echo "</tr>";
		}
		}
		echo "</table>";
		#end table gspb_plus sa
		
		
		#begin Table GSPB_PLUS mitarbeit
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB+ Mitarbeit</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->gspb_plus_mit);
		
		foreach($teile as $customer){
		if ($customer != "") {
		list($testdatum, $datumeintrag, $grund, $punkte, $notiz) = explode("^", $customer);
		
		echo "<tr>";
		echo "<td>".$testdatum."</td>";
		echo "<td>".$grund."</td>";
		echo "<td>".$punkte."</td>";
		echo "<td>".$notiz."</td>";
		echo "</tr>";
		}
		}
		echo "</table>";
		#end table gspb_plus mitarbeit
		
		#begin Table GSPB_PLUS wiederholungen
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB+ Wiederholungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->gspb_plus_wdh);
		
		foreach($teile as $customer){
		if ($customer != "") {
		list($testdatum, $datumeintrag, $grund, $punkte, $notiz) = explode("^", $customer);
		
		echo "<tr>";
		echo "<td>".$testdatum."</td>";
		echo "<td>".$grund."</td>";
		echo "<td>".$punkte."</td>";
		echo "<td>".$notiz."</td>";
		echo "</tr>";
		}
		}
		echo "</table>";
		#end table gspb_plus wiederholungen
		
		
				#begin Table GSPB_PLUS portfolios
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB+ Portfolios</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->gspb_plus_port);
		
		foreach($teile as $customer){
		if ($customer != "") {
		list($testdatum, $datumeintrag, $grund, $punkte, $notiz) = explode("^", $customer);
		
		echo "<tr>";
		echo "<td>".$testdatum."</td>";
		echo "<td>".$grund."</td>";
		echo "<td>".$punkte."</td>";
		echo "<td>".$notiz."</td>";
		echo "</tr>";
		}
		}
		echo "</table>";
		#end table gspb_plus portfolios
								
		
		echo "<br><br><br>";
		
		
		#begin Table GSPB_PLUS sonstige
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB+ Sonstige Beurteilungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->gspb_plus_sonst);
		
		foreach($teile as $customer){
		if ($customer != "") {
		list($testdatum, $datumeintrag, $grund, $punkte, $notiz) = explode("^", $customer);
		
		echo "<tr>";
		echo "<td>".$testdatum."</td>";
		echo "<td>".$grund."</td>";
		echo "<td>".$punkte."</td>";
		echo "<td>".$notiz."</td>";
		echo "</tr>";
		}
		}
		echo "</table>";
		#end table gspb_plus sonstige
		
		echo "</div>";
}

?>