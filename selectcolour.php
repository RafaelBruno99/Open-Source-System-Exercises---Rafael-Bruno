<html>
<head><h2> Select colour page </h2></head>
  <body>
    <?php
      session_start();
      $_SESSION["size"] = $_POST["size"];
      $qty = $_SESSION["qty"];
    ?>
    <form action="confirmation.php" method="post">
      Select the colour for the widgets you are ordering
    <select name="selcolour">
      <option>white</option>
      <option>red</option>
      <option>yellow</option>
      <option>green</option>
      <option>blue</option>
    </select>
    <br></br>
    <input type="submit" value="Buy"/>
  </form>
</body>
</html>
