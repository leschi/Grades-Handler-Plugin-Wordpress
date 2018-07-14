<?php
function de(){
		echo "<style type='text/css'>

			.deutsch_noten{

				width: 500px;

			}

			</style>";

		echo "<div class='deutsch_noten'>";

		global $current_user;

		get_currentuserinfo();

		$name = $current_user->user_login;

		global $wpdb;

		$customers = $wpdb->get_row("SELECT deutsch_sa,deutsch_mit,deutsch_wdh,deutsch_port,deutsch_sonst FROM schueler Where username ='".$name."';");

		#begin Table Deutsch SA

		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch Schularbeiten</div><br><br>";

		echo "<table style='border: 2px'>";

		echo "<tr>";

		echo "<th>Testdatum</th>";

		echo "<th>Grund</th>";

		echo "<th>Punkte</th>";

		echo "<th>Notiz</th>";

		echo "</tr>";

		

$teile = explode("}", $customers->deutsch_sa);

		

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

		#end table deutsch sa
		
		
		#begin Table Deutsch mitarbeit

		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch Mitarbeit</div><br><br>";

		echo "<table style='border: 2px'>";

		echo "<tr>";

		echo "<th>Datum</th>";

		echo "<th>Grund</th>";

		echo "<th>Punkte</th>";

		echo "<th>Notiz</th>";

		echo "</tr>";

		

		$teile = explode("}", $customers->deutsch_mit);

		

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

		#end table deutsch mitarbeit
		
		#begin Table Deutsch wiederholungen

		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch Wiederholungen</div><br><br>";

		echo "<table style='border: 2px'>";

		echo "<tr>";

		echo "<th>Datum</th>";

		echo "<th>Grund</th>";

		echo "<th>Punkte</th>";

		echo "<th>Notiz</th>";

		echo "</tr>";

		

		$teile = explode("}", $customers->deutsch_wdh);

		

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

		#end table deutsch wiederholungen
		
		
				#begin Table Deutsch portfolios

		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch Portfolios</div><br><br>";

		echo "<table style='border: 2px'>";

		echo "<tr>";

		echo "<th>Datum</th>";

		echo "<th>Grund</th>";

		echo "<th>Punkte</th>";

		echo "<th>Notiz</th>";

		echo "</tr>";

		

		$teile = explode("}", $customers->deutsch_port);

		

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

		#end table deutsch portfolios

								

		

		echo "<br><br><br>";

		

		

		#begin Table Deutsch sonstige

		echo "<div class='widefat' style='font-size: 200%;text-decoration: underline;'>Deutsch Sonstige Beurteilungen</div><br><br>";

		echo "<table style='border: 2px'>";

		echo "<tr>";

		echo "<th>Datum</th>";

		echo "<th>Grund</th>";

		echo "<th>Punkte</th>";

		echo "<th>Notiz</th>";

		echo "</tr>";

		

		$teile = explode("}", $customers->deutsch_sonst);

		

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

		#end table deutsch sonstige
		echo "</div>";
}
?>