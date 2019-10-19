
<?php 
	include 'function.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pemweb Course 3 | Edit Data</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">
	<div class="jumbotron col-md-6 offset-md-3" style="margin-top: 50px;">
		<h1 class="display-3">Edit This Song</h1>
		<?php foreach($song->show($_GET['id']) as $data){ ?>
		<form method="post" action="function.php?id=<?php echo $data['id']; ?>">
			<fieldset>
				<div class="form-group">
					<label for="name">Title</label>
					<input type="text" class="form-control" value="<?php echo $data['name']; ?>" name="name" required>
				</div>
				<div class="form-group">
					<label for="price">Price</label>
					<input type="number" class="form-control" value="<?php echo $data['price']; ?>" name="price"  required>
				</div>
				<div class="form-group">
					<label for="discount">Discount</label>
					<input type="number" class="form-control" name="discount" value="<?php echo $data['discount']; ?>" required>
				</div>
				</fieldset>
				<button type="submit" name="song-update" class="btn btn-primary">Submit</button>
				<a href="index.php" class="btn btn-default">Cancel</a>
			</fieldset>
		</form>
		<?php } ?>
	</div>
</div>
<script type="text/javascript" src="js/control.js"></script>
</body>
</html>