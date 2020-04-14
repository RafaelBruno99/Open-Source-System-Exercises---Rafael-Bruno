<!DOCTYPE html>
<html>
<head>
  <title> Information Display </title>
  <style>

      table{
        border-collapse: collapse;
        width: 100%
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
      }

      th{
        background-color: #d96459;
        color: white;
      }

      tr: nth-child(even){
        background-color: #f2f2f2;
      }

  </style>
</head>

<body>
  <table>
        <?php
          $host = "localhost";
          $username = "root";
          $password = "";
          $database = "wk5database";

          $link = mysqli_connect($host, $username, $password, $database);

          $query = "INSERT INTO test(NAME,email,phone_number) VALUES ('$_POST[txtName]','$_POST[txtEmail]','$_POST[txtPhoneNumber]')";

          /* Confirmation of the connection to the database no long necessary.
          if(!mysqli_query($link, $query))
          {
            echo "Not inserted";
          }
          else {
            echo "Inserted";
          }
          */

        ?>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Phone Number</th>
        </tr>

        <?php

          $sql = "SELECT * FROM test";

          $result = $link-> query($sql);


          if($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()) {
              echo "<tr><td>" . $row["NAME"] . "</td><td>" . $row["email"] . "</td><td>" . $row["phone_number"] . "</td></tr>";
            }
            echo "</table>";
          }
          echo "0 result";

          $link-> close();

          header("refresh:7; url = wk6ex1.html");


        ?>
    </table>
  </body>
</html>
