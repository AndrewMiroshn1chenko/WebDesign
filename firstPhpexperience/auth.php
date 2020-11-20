<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">

<div class="container">
  <?php
  if($_POST["login"] == "admin" && $_POST["password"] == "1111"){
    $_SESSION["auth"] = true;
    header("Location: http://localhost/FirstPhpexperience/restricted.php ");
  }
  else {
      $_SESSION["auth"] = false;
    header("Location: http://localhost/FirstPhpexperience/restricted.php ");
}
  ?>

   <hr>
   <a class="btn" href="set_session.php">return back</a>
</div>
</body>
</html>