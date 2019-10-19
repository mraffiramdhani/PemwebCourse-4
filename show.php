<?php 
include 'function.php'; 
?>

<!DOCTYPE>
<html>
<head>
	<title>Pemweb Course 4</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
		tr{
			text-align: center;
		}
	</style>
</head>
<body>

<div class="container">
	<div class="jumbotron col-md-10 offset-md-1" style="margin-top: 50px;">
		<h1 class="display-3">Song Detail</h1>
		<br/>
		<?php foreach ($song->show($_GET['id']) as $data) { ?>
		<div class="row" style="font-size: 20px;">
			<div class="col-md-4">Title</div>
			<div class="col-md-1">:</div>
			<div class="col-md-6"><input type="text" class="form-control" value="<?php echo $data['name']; ?>" readonly></div>
		</div>
		<div class="row" style="font-size: 20px;">
			<div class="col-md-4">Price</div>
			<div class="col-md-1">:</div>
			<div class="col-md-6"><input type="text" value="Rp.<?php echo $data['price']; ?>" class="form-control" readonly></div>
		</div>
		<div class="row" style="font-size: 20px;">
			<div class="col-md-4">Discount</div>
			<div class="col-md-1">:</div>
			<div class="col-md-6"><input type="text" value="<?php echo $data['discount']; ?> %" class="form-control" readonly></div>
		</div>
		<br/>
		<?php }
			if($music->show($_GET['id']) == false) {
				$id = $_GET['id'];
		?>
		<form method="post" action="function.php?id=<?php echo $id; ?>">
		<div class="row" style="font-size: 20px;">
			<div class="col-md-6">
				<div class="form-group">
					<label for="artist">Artist</label>
					<input type="text" class="form-control" name="artist" placeholder="Enter Song Artist">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="genre">Genre</label>
					<input type="text" class="form-control" name="genre" placeholder="Enter Song Genre">
				</div>
			</div>
		</div>
		<button type="submit" name="music-add" class="btn btn-primary">Save</button>
		</form>
		<br/>
		<?php }else{ 
			foreach ($music->show($_GET['id']) as $key) { ?>
		<div class="row" style="font-size: 20px;">
			<div class="col-md-4">Artist</div>
			<div class="col-md-1">:</div>
			<div class="col-md-6"><input type="text" class="form-control" value="<?php echo $key['artist']; ?>" readonly></div>
		</div>
		<div class="row" style="font-size: 20px;">
			<div class="col-md-4">Genre</div>
			<div class="col-md-1">:</div>
			<div class="col-md-6"><input type="text" class="form-control" value="<?php echo $key['genre']; ?>" readonly></div>
		</div>
		<br>
		<?php }} 
			if($cabinet->show($_GET['id']) == false) { 
				$id = $_GET['id'];
		?>
		<form method="post" action="function.php?id=<?php echo $id; ?>">
		<div class="row" style="font-size: 20px;">
			<div class="col-md-6">
				<div class="form-group">
					<label for="model">Cabinet Model</label>
					<input type="text" class="form-control" name="model" placeholder="Enter Cabinet Model">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="capacity">Cabinet Capacity</label>
					<input type="number" class="form-control" name="capacity">
				</div>
			</div>
		</div>
		<button type="submit" name="cabinet-add" class="btn btn-primary">Save</button>
		</form>
		<br/>
		<?php }else{
			foreach ($cabinet->show($_GET['id']) as $value) {?>
		<div class="row" style="font-size: 20px;">
			<div class="col-md-4">Cabinet Model</div>
			<div class="col-md-1">:</div>
			<div class="col-md-6"><input type="text" class="form-control" value="<?php echo $value['model']; ?>" readonly></div>
		</div>
		<div class="row" style="font-size: 20px;">
			<div class="col-md-4">Cabinet Capacity</div>
			<div class="col-md-1">:</div>
			<div class="col-md-6"><input type="text" class="form-control" value="<?php echo $value['capacity']; ?>" readonly></div>
		</div>
		<br>
		<?php }} ?>
		<a href="index.php" class="btn btn-primary"><- Back</a>
	</div>
</div>

</body>
</html>