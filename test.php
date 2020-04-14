<?php
If ($_POST["btnSubmit"]) {
echo "I am inside the if statement. Msg = $_POST[txtmsg]";
}
else
{
  ?>
  <html>
  <body>
  <form action="" method="post">
  <input type="text" name="txtmsg" />
  <input type="submit" name="btnSubmit" value="My button"/>
  </form>
  </body>
  </html>
  <?php
}
?>
