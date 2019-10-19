<?php

	include 'controller.php';

	$song = new Product();
	$music = new CDMusic();
	$cabinet = new CDCabinet();

	if(isset($_POST['song-add']))
	{
		$song->songCreate($_POST);
	}

	if(isset($_POST['song-update']))
	{
		$song->update($_GET['id'],$_POST);
	}

	if(isset($_GET['song_delete']))
	{
		$song->delete($_GET['id']);
	}

	if(isset($_POST['music-add']))
	{
		$music->create($_GET['id'], $_POST);
	}

	if(isset($_POST['cabinet-add']))
	{
		$cabinet->create($_GET['id'], $_POST);
	}

?>