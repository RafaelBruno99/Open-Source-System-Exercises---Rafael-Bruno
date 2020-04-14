<?php

$db = mysqli_connect("localhost", "root", "", "store");

// Obtain the file sent to the server within the response.
$image = $_FILES['monsterimage']['tmp_name'];
$audio = $_FILES['monsteraudio']['tmp_name'];

  // Get the file binary data
  $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
  $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

  $sql = "INSERT INTO monster(name, image, audio) VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

  if(mysqli_query($db, $sql))
  {
    echo "data was saved";
  }
  else {
    echo "data was not saved";
  }

   mysqli_close($db);
?>
