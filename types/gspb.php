<?php
function gspb()
{
echo "<style type='text/css'>
			.gspb_noten{
				width: 500px;
			}
			</style>";
		echo "<div class='gspb_noten'>";
		global $current_user;
		get_currentuserinfo();
		$name = $current_user->user_login;
		global $wpdb;
		$customers = $wpdb->get_row("SELECT gspb_sa,gspb_mit,gspb_wdh,gspb_port,gspb_sonst FROM schueler Where username ='".$name."';");
		#begin Table GSPB SA
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB Schularbeiten</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Testdatum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
$teile = explode("}", $customers->gspb_sa);
		
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
		#end table gspb sa
		
		
		#begin Table GSPB mitarbeit
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB Mitarbeit</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->gspb_mit);
		
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
		#end table gspb mitarbeit
		
		#begin Table GSPB wiederholungen
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB Wiederholungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->gspb_wdh);
		
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
		#end table gspb wiederholungen
		
		
				#begin Table GSPB portfolios
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB Portfolios</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->gspb_port);
		
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
		#end table gspb portfolios
								
		
		echo "<br><br><br>";
		
		
		#begin Table GSPB sonstige
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>GSPB Sonstige Beurteilungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->gspb_sonst);
		
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
		#end table gspb sonstige
		
		echo "</div>";
}
?>