<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wk5database";

    $link = mysqli_connect($host, $username, $password, $database);

    $sql = "DELETE FROM test WHERE ID='$_POST[id]';";

    if (mysqli_query($link, $sql)) {
      echo "Delete as been done";
      header("refresh:4; url=wk6ex2.php");

    }
    else {
      echo "Delete as not been done";
      header("refresh:5; url=wk6ex2.php");
    }
?>
