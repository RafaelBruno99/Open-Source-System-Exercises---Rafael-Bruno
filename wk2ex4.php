<html>
<body>
  <h1> Speed Camera Advise</h1>
  <br></br>
  <?php
    $points = 13;
    //Output appropriate message depending on points awarded.
    if ($points >=12) {
      echo "Public transport is your best option. </br>";
    }
    elseif ($points >= 9) {
      echo "If you get caught say your grandmother was driving. </br>";
    }
    else {
      echo "There is no need to worry about speed limit";
    }

  ?>

</body>
</html>
