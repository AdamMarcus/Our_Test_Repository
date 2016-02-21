<!DOCTYPE HTML>
<html> 
  <body>

    <form action="adams_test.php" method="post">
    FirstName: <input type="text" name="first"><br>
    LastName: <input type="text" name="last"><br>
    Email: <input type="email" name="email"><br>
    <input type="submit">
    </form>
    
    <?php
      $full_name = $_POST["first"] . " " . $_POST["last"];
    ?>
    Welcome <?php echo $full_name  . " and email: " .  $_POST["email"]; ?>

  </body>
</html>
