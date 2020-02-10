<html>
<body>
  <?php
    $mymarks["Software Engineering"] = 55;
    $mymarks["Programming 1"] = 65;
    $mymarks["Programming 2"] = 75;
    $mymarks["Web Services"] = 75;
    $mymarks["XML"] = 95;
    $mymarks["OOD"] = 75;

    $total = 0;

    while (list($index, $value) = each($mymarks)) {
      echo "for $index my grade was $value. </br>";

      $total = $total + $mymarks[$index];
    }

    $average = $total/6;
    echo "My average grade was $average. </br>";
  ?>

</body>
</html>
