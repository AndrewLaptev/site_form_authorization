<?php
include('register.php'); // Includes Login Script
?>
<!DOCTYPE html>

<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Register Form in PHP with Session</title>
    <link href="login.css" media="all" rel="stylesheet" type="text/css" />
</head>
<body>
  <section class="container">
    <div class="login" id='login' style='display:block'>
      <h1>Register</h1>
      <form action="" method="post">
        <p><input id="name" name="username" placeholder="username" type="text"></p>
        <p><input id="password" name="password" placeholder="password" type="password"></p>
        <p class="submit"><input name="submit" type="submit" value=" Register "></p>
        <p><a href="index.php">Login</a></p> 
		<span><?php echo $error; ?></span> 
      </form>
    </div>
</body>
</html>