<?php
#if ($_GET['pw'] == "heavenTV")
#{
$servername = $_GET['ip'];
$username = $_GET['user'];
$password = $_GET['pw'];
$dbname = $_GET['dbname'];


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM schueler;";
$result = $conn->query($sql);

$rows = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		$prnt;
		foreach ($row as $rw_value)
		{
			$prnt .= $rw_value . ";";
		}
		echo $prnt . "|";
		$prnt = "";
		#echo "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
#}
?>