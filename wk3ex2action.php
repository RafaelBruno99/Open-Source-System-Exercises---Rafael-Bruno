<html>

<head>
  <title>Response to form</title>
<head>

<body>
  <?php
  if ($_POST["txtage"] < 21)
    {
    echo "You are under 21 years old<br/>";
    }
    else
    {
    echo "You are  21 years old or over<br/>";
    }
   ?>
</body>
</html>
