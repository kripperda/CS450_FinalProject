<!DOCTYPE html>
<html>
    <body>

<?php

$search = $_POST['search'];
$column = $_POST['column'];

$servername = "127.0.0.1";
$username = "kripperda";
$password = "JoelleElaine2216";
$db = "masterdirectory";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from directory where $column like '%$search%'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
while($row = $result->fetch_assoc() ){
	echo $row["homeowner"]."  ".$row["address"]."  ".$row["phone"]."
    ".$row["email"]." ".$row["village"]." ".$row["dues"]."<br>";
}
} else {
	echo "0 records";
}

$conn->close();

?>

</body>
</html>
