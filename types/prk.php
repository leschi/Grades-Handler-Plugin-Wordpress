<?php
function prk ()
{
		echo "<style type='text/css'>
			.prk_noten{
				width: 500px;
			}
			</style>";
		echo "<div class='prk_noten'>";
		global $current_user;
		get_currentuserinfo();
		$name = $current_user->user_login;
		global $wpdb;
		$customers = $wpdb->get_row("SELECT prk_sa,prk_mit,prk_wdh,prk_port,prk_sonst FROM schueler Where username ='".$name."';");
		#begin Table Prk SA
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>PRK Schularbeiten</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Testdatum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
$teile = explode("}", $customers->prk_sa);
		
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
		#end table prk sa
		
		
		#begin Table Prk mitarbeit
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>PRK Mitarbeit</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->prk_mit);
		
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
		#end table prk mitarbeit
		
		#begin Table Prk wiederholungen
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>PRK Wiederholungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->prk_wdh);
		
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
		#end table prk wiederholungen
		
		
				#begin Table Prk portfolios
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>PRK Portfolios</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->prk_port);
		
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
		#end table prk portfolios
								
		
		echo "<br><br><br>";
		
		
		#begin Table Prk sonstige
		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>PRK Sonstige Beurteilungen</div><br><br>";
		echo "<table style='border: 2px'>";
		echo "<tr>";
		echo "<th>Datum</th>";
		echo "<th>Grund</th>";
		echo "<th>Punkte</th>";
		echo "<th>Notiz</th>";
		echo "</tr>";
		
		$teile = explode("}", $customers->prk_sonst);
		
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
		#end table prk sonstige
		
		echo "</div>";
}
?>