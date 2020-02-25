<html>
<head><h2> Select Size of the widgets </h2></head>
  <body>
    <?php
      session_start();
      $_SESSION["qty"] = $_POST["qty"];
    ?>
    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 5px;
        text-align: left;
      }
    </style>
    <table style="width:100%">
      <tr>
        <th>Size</th>
        <th colspan="2">Price</th>
      </tr>
      <tr>
        <td>Small</td>
        <td>15.75</td>
      </tr>
      <tr>
        <td>Medium</td>
        <td>16.75</td>
      </tr>
      <tr>
        <td>Large</td>
        <td>17.75</td>
      </tr>
      <tr>
        <td>Extra Large</td>
        <td>18.75</td>
      </tr>
    </table>
    <br></br>
    <form action="selectcolour.php" method="post">
      Select the size for the <?php echo $_POST["qty"] ?> widgets you are ordering
    <select name="size">
      <option value="1">Small</option>
      <option value="2">Medium</option>
      <option value="3">Large</option>
      <option value="4">Extra Large</option>
    </select>
    <br></br>
    <input type="submit" value="Buy"/>
  </form>
</body>
</html>
