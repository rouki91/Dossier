<?php

$todo = [];

// ouvrir le fichier en écriture seule
// Utiliser la fonction fgetcsv
// fermer le fichier

$file = fopen("data.csv","r");

while(! feof($file))
{
  	//print_r(fgetcsv($file));
	$task=fgetcsv($file);
	if($task!==false)
	{
		array_push($todo,$task);
	}
}
fclose($file);


//var_dump($todo);
//print_r($todo);





include "page.phtml";

