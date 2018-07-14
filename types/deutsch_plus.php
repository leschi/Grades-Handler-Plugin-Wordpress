<?php
function deutsch_plus()
{
	echo "<style type='text/css'>
			.deutsch_plus_noten{
				width: 500px;
			}
			</style>";
		echo "<div class='deutsch_plus_noten'>";
		global $current_user;
		get_currentuserinfo();
		$name = $current_user->user_login;
		global $wpdb;
		$customers = $wpdb->get_row("SELECT deutsch_plus_sa,deutsch_plus_mit,deutsch_plus_wdh,deutsch_plus_port,deutsch_plus_sonst FROM schueler Where username ='".$name."';");
		#begin Table DEUTSCH_PLUS SA
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch+ Schularbeiten</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Testdatum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
$teile = explode("}", $customers->deutsch_plus_sa);
		
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
		#end table deutsch_plus sa
		
		
		#begin Table DEUTSCH_PLUS mitarbeit
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch+ Mitarbeit</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->deutsch_plus_mit);
		
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
		#end table deutsch_plus mitarbeit
		
		#begin Table DEUTSCH_PLUS wiederholungen
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch+ Wiederholungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->deutsch_plus_wdh);
		
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
		#end table deutsch_plus wiederholungen
		
		
				#begin Table DEUTSCH_PLUS portfolios
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch+ Portfolios</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->deutsch_plus_port);
		
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
		#end table deutsch_plus portfolios
								
		
		echo "<br><br><br>";
		
		
		#begin Table DEUTSCH_PLUS sonstige
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch+ Sonstige Beurteilungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->deutsch_plus_sonst);
		
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
		#end table deutsch_plus sonstige
		
		echo "</div>";
}
?>