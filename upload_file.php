<?php

/*

VARIABLES

  - Allowed File Types

*/

$allowedExts = array("MOV", "mov", "wmv", "m4v", "avi", "mp4", "3gp", "flv");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);

/*

  - Php Pages

*/

$file_path = "confirm.php";
$content = file_get_contents($file_path); // Success

$errorfilepath = "invalid.php"; 
$errorcontent = file_get_contents($errorfilepath); // Invalid File


$error2filepath = "error.php";
$error = file_get_contents($error2filepath); // General Error


$duplicatefilepath = "duplicate.php";
$duplicatecontent = file_get_contents($duplicatefilepath); // Duplicate File

$limitpath = "limit.php";
$limiterror = file_get_contents($limitpath); // File Too Big

/*

  - Database

*/

  


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

/*

 LINK mySQL

*/


$link = mysqli_connect($db_server, $db_user, $db_password, $db_name, $port);

if(!$link)
{
    echo $error;
    exit;
}

/*

 Success Email Variables

*/

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



ini_set('upload_max_filesize', '2G');
ini_set('post_max_size', '2G');
ini_set('max_input_time', 1200);
ini_set('max_execution_time', 1200);


/*

 Update Database

*/

$sql =  "INSERT INTO $table_name (name, email, description, videotitle) VALUES ('$name', '$email', '$description', '$filename')";


if(mysqli_query($link, $sql)){

  mail($to, $subject, $message, $headers);
  echo $content;
    
} else{
     echo $error;
}

mysqli_close($link);

/*

 FILE UPLOAD
&& ($_FILES["file"]["size"] < 13107200)


if ((($_FILES["file"]["type"] == "video/mp4")
      || ($_FILES["file"]["type"] == "video/x-m4v")
      || ($_FILES["file"]["type"] == "video/quicktime")
      || ($_FILES["file"]["type"] == "video/mov")
      || ($_FILES["file"]["type"] == "video/3gpp")
      || ($_FILES["file"]["type"] == "video/MOV")
      || ($_FILES["file"]["type"] == "video/x-ms-wmv")
      || ($_FILES["file"]["type"] == "video/avi")
      || ($_FILES["file"]["type"] == "video/flv")
      || ($_FILES["file"]["type"] == "video/m4v"))

      
      && in_array($extension, $allowedExts))

        {
        if ($_FILES["file"]["error"] > 0)
          {
          echo $errorcontent; // Invalid File
          }
        else {

          if ($_FILES["file"]["size"] > 100000000) // 100Mb
            {
             echo $limiterror; // File Too Big
            }
          else
            {

          if (file_exists("upload/" . $_FILES["file"]["name"]))
            {
             echo $duplicatecontent; // Duplicate Content
            }
          else
            {
            move_uploaded_file($_FILES["file"]["tmp_name"],
            "upload/" . $_FILES["file"]["name"]);
            mail($to, $subject, $message, $headers);
            echo $content; // Success
            
            }
          }
        }
      }
      else
        {
        echo $error;
        }

        */
?>