<?php
	session_start();
	
	if(isset($_POST['item']) && isset($_POST['capacity']) )
	{
		$item = $_POST['item'];
		$capacity = $_POST['capacity'];
	}
	
	$_SESSION['item'] = $item;
	$_SESSION['capacity'] = $capacity;
	
	header('Location: knapsack.php');
	exit;
?>