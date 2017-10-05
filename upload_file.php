<?php

$allowedExts = array("MOV", "mov", "wmv", "m4v", "avi", "mp4", "3gp", "flv");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$file_path = "confirm.php";
$content = file_get_contents($file_path);
$errorfilepath = "invalid.php";
$errorcontent = file_get_contents($errorfilepath);
$error2filepath = "error.php";
$error = file_get_contents($error2filepath);
$duplicatefilepath = "duplicate.php";
$duplicatecontent = file_get_contents($duplicatefilepath);



$db_server = "rdbms.strato.de";
$db_user = "U3086321";
$db_password = "fl1rtestdumitmir";
$db_name = "DB3086321";
$table_name = "flirttable";

/*

$db_server = "localhost";
$db_user = "root";
$db_password = "root";
$db_name = "inventory";
$table_name = "flirttable";
$port = "3306";

*/


$link = mysqli_connect($db_server, $db_user, $db_password, $db_name, $port);

if(!$link)
{
    echo $error;
    exit;
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$filename = $_FILES["file"]["name"];

$to      = $email;
$subject = 'FLIRT';

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: info@flirt-performance.de" . "\r\n" .
            "Reply-To: info@flirt-performance.de" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
$message = '<p>Vielen Dank für dein Video bei www.flirt-performance.de
              für das Theaterstück FLIRT.</p>
              <p>Das Stück wird im Februar 2018 Premiere haben.</p>
              <p>Die Premiere ist in Düsseldorf am FFT
              und im Mai spielen wir beim Theater Strahl in Berlin.
              Davor schicken wir dir noch genaue Infos
              damit du kommst.
              </p>
              <p>Dein FLIRT - Team</p>';



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
      /*echo $content;*/
      mail($to, $subject, $message, $headers);
      
      }
    }
  }
else
  {
  echo $errorcontent;
  }
?>