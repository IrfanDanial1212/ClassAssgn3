<?php
require 'Config.php';
if(!empty($_SESSION["ID_User"])){
  header("Location: Details.php");
}
if(isset($_POST["submit"])){
  $Name_User = $_POST["Name_User"];
  $Email_User = $_POST["Email_User"];
  $Password_User = $_POST["Password_User"];
  $duplicate = mysqli_query($conn, "SELECT * FROM regis_user WHERE Name_User = '$Name_User' OR Email_User = '$Email_User'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
      $query = "INSERT INTO regis_user VALUES('','$Name_User','$Email_User','$Password_User')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    
  }

?>