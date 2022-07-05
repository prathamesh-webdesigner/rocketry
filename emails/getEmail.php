<!-- For insert values in database  -->

<?php
include_once '../dbConfig.php';

if(isset($_POST['submit']))
{	 
	//  $first_name = $_POST['jobtitle'];
	//  $last_name = $_POST['location'];
	//  $city_name = $_POST['email'];
	 $email = $_POST['email_filed'];
	 $sql = "INSERT INTO emails (emails) VALUES ('$email')";
	 if (mysqli_query($db, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($db);
	 }
	 mysqli_close($db);
}
?>