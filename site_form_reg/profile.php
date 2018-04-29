<?php
include 'login.php';
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="profile.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">

<body>
  <section class="container">
    <div class="login" id='login' style='display:block'>
      <h1 text-align: right >Profile</h1>
      <form action="" method="post">
        <h3 id="welcome">Welcome, <span><?php echo $name; ?></span></h3><br/>
        <b id="logout"><a href="logout.php">Log Out</a></b>
		<span><?php echo $error; ?></span>
      </form>
    </div>
</body>
</div>
</body>
</html>