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
		<h1 class="display-3">Song List</h1>
		<table class="table table-strip">
			<tr>
				<th>No.</th>
				<th>Title</th>
				<th>Price</th>
				<th>Option</th>
			</tr>
			<?php 

			if($song->index() == false){
			?>
			<tr>
				<td colspan="9" style="text-align: center;">No Data Found</td>
			</tr>
			<?php
			}else{

			$no = 1;
			foreach($song->index() as $data){ 
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['name']; ?></td>
				<td>Rp.<?php echo $data['price']; ?></td>
				<td><a href="show.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">View</a> | <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a> | <a href="function.php?id=<?php echo $data['id']; ?>&song_delete" class="btn btn-danger">Delete</a></td>
			</tr>
		<?php }} ?>
		</table>
		<a href="create.php?song" class="btn btn-primary">Insert New Song</a>
	</div>
</div>

</body>
</html>