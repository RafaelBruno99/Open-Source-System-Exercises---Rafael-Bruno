<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = mysqli_connect("localhost", "root", "", "store");

      // Obtain the file sent to the server within the response.
      $image = $_FILES['monsterimage']['tmp_name'];
      $audio = $_FILES['monsteraudio']['tmp_name'];

      // Get the file binary data
      $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
      $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));

      $sql = "INSERT INTO monster(name, image, audio) VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

        if(mysqli_query($db, $sql))
        {
          echo "data was saved";
        }
        else {
          echo "data was not saved";
        }

         mysqli_close($db);
  }
  else { ?>
    <html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
    <h2>Monster Details</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
         Monster name :
           <input type="text" name="txtname" size="15" class="form-control" />
           </br></br>
         Monster image :
           <input  type="file" name="monsterimage" accept="image/jpg" class="form-control" />
           </br></br>
         Monster Sound :
           <input  type="file" name="monsteraudio" accept="audio/wav" class="form-control"  />
           </br></br>
         <input type="submit" value="Save"/>
      </form>
    </body>
    </html>
  <?php } ?>
