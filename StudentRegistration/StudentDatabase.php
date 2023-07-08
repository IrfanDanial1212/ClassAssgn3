<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "classasgn1";

// creating a connection
$con = mysqli_connect($host, $username, $password, $dbname);

// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$matricNumber = $_POST["matricNumber"];
$email = $_POST["email"];
$currentAddress = $_POST["currentAddress"];
$homeAddress = $_POST["homeAddress"];
$mobilePhoneNumber = $_POST["mobilePhoneNumber"];
$homeNumber = $_POST["homeNumber"];

//Matric number check.
$matricNumberCheck = strlen((string)$matricNumber);
if ($matricNumberCheck >7)
{
    die("Matric Number you enter does not match the requirement");
}

//Email validation
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    die ("Email you enter not valid.");
}


$sql = "INSERT INTO student_details (StudentName, MatricNumber, Email, CurrentAddress, HomeAddress, MobilePhone, HomePhone)
VALUES ('$name', '$matricNumber', '$email', '$currentAddress', '$homeAddress', '$mobilePhoneNumber', '$homeNumber')";

if ($con->query($sql) === TRUE) {
  echo "Your record succesfully inserted";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}


$con->close();

?>

