<?php

$allowedExts = array("mov", "wmv", "m4v", "avi", "mp4");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$file_path = "confirm.php";
$content = file_get_contents($file_path);


if ((($_FILES["file"]["type"] == "video/mp4")
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
  echo $_FILES["file"]["type"];
  }
?>