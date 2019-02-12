<?php

/*
   include('dbcon.php');

	$name		=$_POST['name'];
	$campus		=$_POST['campus'];
	$phone		=$_POST['phone'];
  $district		=$_POST['district'];
	$worker		=$_POST['worker'];
	$name_abt		=$_POST['name_abt'];
	$phone_abt		=$_POST['phone_abt'];





   $result = $db->query("SET NAMES utf8");
		$Q1	= "	INSERT INTO  donated ( name, phone, campus, district, worker, name_abt, phone_abt, creationtime )
				VALUES( :name, :phone , :campus,  :district, :worker, :name_abt, :phone_abt, NOW() )" ;
		echo "$Q1";

		$stmt = $db->prepare($Q1);
		$stmt->execute(array(  ':name' => $name,   ':phone' => $phone,  ':campus' => $campus,  ':district' => $district, ':worker' => $worker, ':name_abt' => $name_abt, ':phone_abt' => $phone_abt	 ));
		$affected_rows = $stmt->rowCount();
		echo "<br>inserted : $affected_rows<br>";

	header('location:../thankdonation/index.html');
*/
 ?>
<?php
    $name		=$_POST['name'];
	$campus		=$_POST['campus'];
	$phone		=$_POST['phone'];
  $district		=$_POST['district'];
	$worker		=$_POST['worker'];
	$name_abt		=$_POST['name_abt'];
	$phone_abt		=$_POST['phone_abt'];
	
// Create connection

$servername = "localhost" ; 
$username = "profcon_23";
$password = "wisdomstudents";
$dbname = "profcon_registration";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO donated (name, campus, phone, district, worker, name_abt, phone_abt,   creationtime)
VALUES ('$name', '$campus', '$phone', '$district', '$worker', '$name_abt', '$phone_abt',  NOW())";


if ($conn->query($sql) === TRUE) {
    echo '<script>window.location.href = "../thankdonation/index.html";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>