<?php

$allowedExts = array("MOV", "wmv", "m4v", "avi", "mp4");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$file_path = "confirm.php";
$content = file_get_contents($file_path);



$db_server = "rdbms.strato.de";
$db_user = "U3086321";
$db_password = "fl1rtestdumitmir";
$db_name = "DB3086321";
$table_name = "flirttable";



$link = mysqli_connect($db_server, $db_user, $db_password, $db_name);

if(!$link)
{
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$description = mysqli_real_escape_string($link, $_REQUEST['description']);
$filename = $_FILES["file"]["name"];

$sql =  "INSERT INTO $table_name (name, email, description, videotitle) VALUES ('$name', '$email', '$description', '$filename')";


if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    echo $filename;
}

mysqli_close($link);

if ((($_FILES["file"]["type"] == "video/mp4")
|| ($_FILES["file"]["type"] == "video/quicktime")
|| ($_FILES["file"]["type"] == "video/mov")
|| ($_FILES["file"]["type"] == "video/wmv")
|| ($_FILES["file"]["type"] == "video/avi")
|| ($_FILES["file"]["type"] == "video/m4v"))

&& ($_FILES["file"]["size"] < 500000000)
&& in_array($extension, $allowedExts))

  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
    

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
        echo $_POST["name"];
  echo $_POST["email"];
  echo $_POST["description"];
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
  echo "Invalid file";
  }
?>