<?php
function schreibwerkstatt ()
{

		echo "<style type='text/css'>
			.schreibwerkstatt_noten{
				width: 500px;
			}
			</style>";
		echo "<div class='schreibwerkstatt_noten'>";
		global $current_user;
		get_currentuserinfo();
		$name = $current_user->user_login;
		global $wpdb;
		$customers = $wpdb->get_row("SELECT schreibwerkstatt_sa,schreibwerkstatt_mit,schreibwerkstatt_wdh,schreibwerkstatt_port,schreibwerkstatt_sonst FROM schueler Where username ='".$name."';");
		#begin Table Schreibwerkstatt SA
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Schreibwerkstatt Schularbeiten</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Testdatum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
$teile = explode("}", $customers->schreibwerkstatt_sa);
		
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
		#end table schreibwerkstatt sa
		
		
		#begin Table Schreibwerkstatt mitarbeit
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Schreibwerkstatt Mitarbeit</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->schreibwerkstatt_mit);
		
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
		#end table schreibwerkstatt mitarbeit
		
		#begin Table Schreibwerkstatt wiederholungen
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Schreibwerkstatt Wiederholungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->schreibwerkstatt_wdh);
		
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
		#end table schreibwerkstatt wiederholungen
		
		
				#begin Table Schreibwerkstatt portfolios
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Schreibwerkstatt Portfolios</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->schreibwerkstatt_port);
		
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
		#end table schreibwerkstatt portfolios
								
		
		echo "<br><br><br>";
		
		
		#begin Table Schreibwerkstatt sonstige
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Schreibwerkstatt Sonstige Beurteilungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->schreibwerkstatt_sonst);
		
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
		#end table schreibwerkstatt sonstige
		
		echo "</div>";

}
?>