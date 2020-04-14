<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "wk5database";

    $link = mysqli_connect($host, $username, $password, $database);

    $sql = "SELECT * FROM test WHERE NAME = '$_GET[id]';";
    $result = mysqli_query($link, $sql);

    while ($row = $result-> fetch_assoc()) {
      $userid = $row['ID'];
      $name = $row['NAME'];
      $email = $row['email'];
      $mobile = $row['phone_number'];
    }


?>
<html>
  <body>
    <form action="wk6ex3action.php" method="post">
    	Name :
    	<input type=text name=txtname value="<?php echo $name ?>" readonly />
    	</br>
    	Email :
    	<input type=text name=txtemail value="<?php echo $email ?>" />
    	</br>
    	Phone Number :
    	<input type=text name=txtmobile value="<?php echo $mobile ?>" />
      <input type="hidden" name=id value="<?php echo $userid ?>"/>
    	</br>
    	<input type=submit name=btnsubmit value="save"/>
  </form>
  <form action="wk6ex4action.php" method="post">
    <input type="hidden" name=id value="<?php echo $userid ?>"/>
    <input type="submit" name="btndelete" value="delete">
  </form>
  </body>
</html>
