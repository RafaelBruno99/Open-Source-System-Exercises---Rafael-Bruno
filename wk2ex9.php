<html>
<body>
  <?php
    $topModules[0] = "Internet System Development";
    $topModules[4] = "Software Engineering";
    $topModules[5] = "Web Services";
    $topModules[6] = "Mobile Systems";

    while (list($index,$value) = each($topModules)) {
      echo "Index is $index and value is $value. </br>";
    }
  ?>

</body>
</html>
