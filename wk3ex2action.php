<html>

<head>
  <title>Response to form</title>
<head>

<body>
  <?php
    switch ($_POST["radcourse"]) {
      case 'HNC':
        echo "You have select an HNC course";
        break;
        case 'HND':
          echo "You have select an HND course";
          break;
          case 'BSC':
            echo "You have select an BSC course";
            break;

      default:
        echo "No course selected";
        break;
    }
   ?>
</body>
</html>
