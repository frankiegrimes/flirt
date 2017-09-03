<?php

$allowedExts = array("MOV", "mov" "wmv", "m4v", "avi", "mp4", "3gp", "flv");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$file_path = "confirm.php";
$content = file_get_contents($file_path);
$errorcontent = file_get_contents("invalid.php");
$error = file_get_contents("error.php");
$duplicatecontent = file_get_contents("duplicate.php");



$db_server = "rdbms.strato.de";
$db_user = "U3086321";
$db_password = "fl1rtestdumitmir";
$db_name = "DB3086321";
$table_name = "flirttable";



$link = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if(!$link)
{
    echo $error;
    exit;
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$filename = $_FILES["file"]["name"];

$sql =  "INSERT INTO $table_name (name, email, description, videotitle) VALUES ('$name', '$email', '$description', '$filename')";


if(mysqli_query($link, $sql)){
    
} else{
     echo $error;
}

mysqli_close($link);

if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "video/quicktime")
|| ($_FILES["file"]["type"] == "video/mov")
|| ($_FILES["file"]["type"] == "video/3gpp")
|| ($_FILES["file"]["type"] == "video/MOV")
|| ($_FILES["file"]["type"] == "video/x-ms-wmv")
|| ($_FILES["file"]["type"] == "video/avi")
|| ($_FILES["file"]["type"] == "video/flv")
|| ($_FILES["file"]["type"] == "video/m4v"))

&& ($_FILES["file"]["size"] < 500000000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo $error;
    }
  else
    {
    

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
       echo $duplicatecontent;
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo $content;
      
      }
    }
  }
else
  {
  echo $errorcontent;
  }
?>