<?php

var_dump($_POST);

$fulldate = ($_POST['day'] .$_POST['month'] .$_POST['year']);

 

if (array_key_exists('title', $_POST) && array_key_exists('day',$_POST) && array_key_exists('month',$_POST) && array_key_exists('year',$_POST))
{
	//$tab = ['<input type="checkbox" name ="check">'];
	$tab = [];
	array_push($tab,$_POST['title']);
	array_push($tab,$_POST['comments']);
	array_push($tab,$fulldate);
	array_push($tab,$_POST['prio']);
	var_dump($tab);
	
	print_r($tab);

	//$list = $tab;

	$file = fopen("data.csv","a");
	fputcsv($file,$tab);
	/*
	foreach ($list as $line)
	  {
	  fputcsv($file,explode(',',$line));
	  }
	*/
	fclose($file);
}



header("location:index.php?success=ok");
die();



?>