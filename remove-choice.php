<?php



$todo = [];
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

// Toutes les tâches
//var_dump($todo);

// Les tâches a supprimées
//var_dump($_POST);

// Les tâches que je conserve
$taskconserve=[];
//var_dump($taskconserve);

//$file = fopen("data.csv","w");


for($i=0;$i<count($todo);$i++)
{
	//echo $i;
	
	if(in_array($i,$_POST['supprimer']))
	{

	}
	else
	{
		array_push($taskconserve,$todo[$i]);
	}
	
}

//var_dump($taskconserve);
// Ouvrir le fichier et tout effacer
// Parcourir le tableau $taskconserve
	// utiliser fputcsv pour ajouter la tache en court
// Fermer le fichier

$file=fopen("data.csv","w");

for($compteur=0;$compteur<count($taskconserve);$compteur++)
{
	//echo $compteur;
	$file = fopen("data.csv","a");
	fputcsv($file,$taskconserve[$compteur]);
	fclose($file);
}



include "index.php";
