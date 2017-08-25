<?php

$allowedExts = array("mov", "wmv", "m4v", "avi", "mp4");
$extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
$file_path = "/Users/shabba/Desktop/Sites/flirt/confirm.php";
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
    echo $content;

    if (file_exists("/Users/shabba/Desktop/Sites/flirt/upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "/Users/shabba/Desktop/Sites/flirt/upload/" . $_FILES["file"]["name"]);
      
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>