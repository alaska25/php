<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>S05: A1</title>
</head>
<body>
	<?php session_start(); ?>
	<?php if(!isset($_SESSION['email'])): ?>
		<form method="POST" action="./server.php">
			<input type="hidden" name="action" value="login"/>

			Email: <input type="email" name="email" required/>
			Password <input type="password" name="password" required>

			<button type="submit">Login</button>
		</form>	
	<?php else: ?>
		<p>Hello, <?= $_SESSION['email']; ?></p>
		<form method="POST" action="./server.php">
			<input type="hidden" name="action" value="logout">
			<button type="submit">Logout</button>
		</form>
	<?php endif; ?>
</body>
</html>
