<<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wk5database";

    $link = mysqli_connect($host, $username, $password, $database);

  	$sql = "SELECT * from test";
    $result = $link-> query($sql);

?>
<html>
<body>

<?php
while ($row = $result-> fetch_assoc())
{
      echo "<a href=\"wk6ex2action.php?id=$row[NAME]\">$row[NAME]</a></br>";
}
?>
</body>
</html>
