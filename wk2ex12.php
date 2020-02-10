<html>
<body>
  <?php
    $topModules[0] = "Open Source Systems";
    $topModules[1] = "Programming 1";
    $topModules[2] = "Programming 2";
    $topModules[3] = "Web Application Development";
    $topModules[4] = "Software Engineering";

  ?>

<head>
  <title>Data in table</title>
</head>
<table border=1 align="center">
  <tr><th>Index</th><th>Subject</th></tr>
  <?php
  for ($count=0; $count < 5 ; $count++) {
    echo "<tr><td>$count</td><td>$topModules[$count]</td></tr>";
  }
   ?>
</table>
</body>
</html>
