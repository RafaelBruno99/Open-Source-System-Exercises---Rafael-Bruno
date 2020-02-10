<html>
<body>
  <?php
    $mymarks["year 1"] = 55;
    $mymarks["year 2"] = 65;
    $mymarks["year 3"] = 75;

    while (list($index, $value) = each($mymarks)) {
      echo "for $index my grade was $value. </br>";
    }
    echo "My best year was year 3 when I averaged " . $mymarks["year 3"]. "</br>";
  ?>

</body>
</html>
