<?php  
// Start the session
session_start();
?>
<!docty html>
<html>
<meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<body>
<?php
	$_SESSION["name"] = "Vasia";
	echo "Session variables are set.";
?>
<style>
       .container {
           width: 400px;
       }
   </style>
<div class="container">
   <form action="auth.php" method="post">
       Login: <input type="text" name="login"><br>
       Password: <input type="text" name="password"><br>
       <input type="submit" class="btn">
   </form>
   
</div>
</body>
</html>
