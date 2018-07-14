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

if ($_GET['grade'] =='1')
{
	
$sql = "UPDATE schueler SET {$_GET['fach']}='{$_GET['note']}' WHERE id={$_GET['nickname']}";
echo $sql;
echo "<br><br>" . $_GET['nickname'];
$result = $conn->query($sql);
}
elseif ($_GET['klass'])
{
$sql = "UPDATE schueler SET klasse='" . $_GET['klasse'] ."' WHERE username='" . $_GET['nickname'] . "'";
$result = $conn->query($sql);
}
elseif ($_GET['test'])
{

	
	if ($result = $conn->query("SHOW TABLES LIKE 'schueler'")) {
    if($result->num_rows == 1) {
        echo "exist";
    }
	}
	else {
    echo "error";
	}
}
$rows = "";


$conn->close();
#}
?>