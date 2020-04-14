<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wk5database";

    $link = mysqli_connect($host, $username, $password, $database);

    $sql = "UPDATE test SET email='$_POST[txtemail]',phone_number='$_POST[txtmobile]' WHERE ID ='$_POST[id]';";

    if (mysqli_query($link, $sql)) {
      echo "Update as been done";
      header("refresh:4; url=wk6ex2.php");

    }
    else {
      echo "Update not done";
      header("refresh:5; url=wk6ex2.php");
    }
?>
