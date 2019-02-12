<?php
    /*

   include('dbcon.php');

	$name		=$_POST['delegate_name'];
    $gender		=$_POST['gender'];
	$age			=$_POST['age'];
	$campus		=$_POST['campus'];
	$course		=$_POST['course'];
    $year    =$_POST['year'];
    $address		=$_POST['address'];
    $district		=$_POST['district'];
	$phone		=$_POST['phone'];
	





   $result = $db->query("SET NAMES utf8");
		$Q1	= "	INSERT INTO  profconreg ( name, age, gender, phone, address ,course, campus, year, district, district_campus, creationtime )
				VALUES( :delegate_name, :age, :gender, :phone , :address, :course, :campus, :year, :district, district_campus, NOW() )" ;
		echo "$Q1";

		$stmt = $db->prepare($Q1);
		$stmt->execute(array(  ':name' => $name,  ':age' => $age, ':gender' => $gender, ':phone' => $phone, ':address' =>
				$address, ':course' => $course, ':campus' => $campus,  ':year' => $year,  ':district' => $district	 ));
		$affected_rows = $stmt->rowCount();
		echo "<br>inserted : $affected_rows<br>";

	header('location:thankreg/index.html');
	*/

 ?>
 
<?php
    $name		=$_POST['name'];
    $gender		=$_POST['gender'];
	$age			=$_POST['age'];
	$campus		=$_POST['campus'];
	$course		=$_POST['course'];
    $year    =$_POST['year'];
    $address		=$_POST['address'];
    $district		=$_POST['district'];
	$phone		=$_POST['phone'];
	$district_campus		=$_POST['district_campus'];
	
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

$sql = "INSERT INTO profconreg (name, gender, age, campus, course, year, address, district, phone, district_campus, creationtime)
VALUES ('$name', '$gender', '$age', '$campus', '$course', '$year', '$address', '$district', '$phone', '$district_campus', NOW())";


if ($conn->query($sql) === TRUE) {
    echo '<script>window.location.href = "thankreg/index.html";</script>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('location:thankreg/index.html');
?>
