<?php
require 'Config.php';
if(!empty($_SESSION["ID_User"])){
  header("Location: Details.php");
}
if(isset($_POST["submit"])){
  $Email_User = $_POST["Email_User"];
  $Password_User = $_POST["Password_User"];
  $result = mysqli_query($conn, "SELECT * FROM regis_user WHERE Email_User = '$Email_User'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($Password_User == $row['Password_User']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: Details.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>