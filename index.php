<?php include('phpCode.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>LoginForm</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php  
			echo $_SESSION['message'];
			unset($_SESSION['message']);

			?>
		</div>
	<?php endif ?>	
	<form action="phpCode.php" method="post">

  <div class="container">
    
    <input type="text" placeholder="Enter Username" name="uname" required>

    <input type="password" placeholder="Enter Password" name="psw" required>

    <button id="login" name="login" type="submit">LOGIN</button>

  </div>
  

  </div>
</form>
</body>
</html>