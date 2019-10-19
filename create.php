<?php require "function.php" ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemweb Course 4 | Insert Song</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="jumbotron col-md-6 offset-md-3" style="margin-top: 50px;">
		<h1 class="display-3">Add New Song</h1>
		<form method="post" action="">
			<fieldset>
				<div class="form-group">
					<label for="name">Title</label>
					<input type="text" class="form-control" name="name" placeholder="Enter Song Title" required>
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="number" class="form-control" name="price" required>
				</div>
				<div class="form-group">
					<label for="discount">Discount</label>
					<input type="number" class="form-control" name="discount" required>
				</div>
				<button type="submit" name="song-add" class="btn btn-primary">Submit</button>
				<a href="index.php" class="btn btn-default">Cancel</a>
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>