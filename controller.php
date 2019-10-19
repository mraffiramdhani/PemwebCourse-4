<?php

	require "db_connection.php";

	class Product extends DBConnection
	{		
		public function index()
		{
			$preData = mysqli_query($this->connect(), "SELECT * FROM song_product");
			if($preData->num_rows > 0){
				while($data = mysqli_fetch_array($preData)){
					$postData[] = $data;
				}
			}else{
				$postData = false;
			}

			return $postData;
		}
		public function songCreate(array $data)
		{
			mysqli_query($this->connect(), 
				"INSERT INTO song_product(name,price,discount)
				 VALUES('".$data['name']."','".$data['price']."','".$data['discount']."')");
			return header("Location:index.php");
		}
		public function show($id)
		{
			$preData = mysqli_query($this->connect(), "SELECT * FROM song_product WHERE id = '".$id."'");
			if($preData->num_rows > 0){
				while($data = mysqli_fetch_array($preData)){
					$postData[] = $data;
				}
			}else{
				$postData = false;
			}

			return $postData;
		}
		public function update($id, array $data)
		{
			mysqli_query($this->connect(), "UPDATE song_product SET name = '".$data['name']."', price = '".$data['price']."', discount = '".$data['discount']."' WHERE id = '".$id."'");
			return header("Location:index.php");
		}
		public function delete($id)
		{
			mysqli_query($this->connect(), "DELETE FROM song_product WHERE id = '".$id."'");
			return header("Location:index.php");
		}
	}

	Class CDMusic extends Product
	{

		private $artist;
		private $genre;

		public function show($id)
		{
			$preData = mysqli_query($this->connect(), "SELECT * FROM cd_music WHERE song_id = '".$id."'");
			if($preData->num_rows > 0){
				while($data = mysqli_fetch_array($preData)){
					$postData[] = $data;
				}
			}else{
				$postData = false;
			}

			return $postData;

		}

		public function create($id, array $data)
		{
			mysqli_query($this->connect(), "INSERT INTO cd_music(song_id,artist,genre) VALUES('".$id."', '".$data['artist']."', '".$data['genre']."')");
			return header("Location:show.php?id=".$id."");
		}

	}

	Class CDCabinet extends Product
	{

		private $capacity;
		private $model;

		public function create($id, array $data)
		{
			mysqli_query($this->connect(), "INSERT INTO cd_cabinet(song_id,capacity,model) VALUES('".$id."', '".$data['capacity']."', '".$data['model']."')");
			return header("Location:show.php?id=".$id."");
		}

		public function show($id)
		{
			$preData = mysqli_query($this->connect(), "SELECT * FROM cd_cabinet WHERE song_id = '".$id."'");
			if($preData->num_rows > 0){
				while($data = mysqli_fetch_array($preData)){
					$postData[] = $data;
				}
			}else{
				$postData = false;
			}

			return $postData;

		}

	}

?>