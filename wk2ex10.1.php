<html>
<body>
  <?php
    $mymarks["year 1"] = 55;
    $mymarks["year 2"] = 65;
    $mymarks["year 3"] = 75;

  ?>
  <head>
    <title>Average Grade per year</title>
  </head>
  <table border=1 align="center">
    <tr><th>Year</th><th>Grade</th></tr>
    <?php
    while (list($index, $value) = each($mymarks)) {
      echo "<tr><td>$index</td><td>$mymarks[$index]</td></tr>";
    }
     ?>
  </table>
</body>
</html>
