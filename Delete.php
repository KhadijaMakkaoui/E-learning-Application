<?php
function Delete($jsonpage,$pagetable){
	//get the index
	$index = $_GET['index'];
 
	//Apporter les données du fichier json
	$data = file_get_contents("$jsonpage.json");
	$data = json_decode($data);
 
	//supprimer la ligne de l'index séléctionné
	unset($data[$index]);
 
	//mettre à jour le fichier json
	$data = json_encode($data, JSON_PRETTY_PRINT);//JSON_PRETTY_PRINT:function to print JSON data with proper alignment and particular format.
	file_put_contents("$jsonpage.json", $data);
    //Retourner à la page d'affichage
	header("location: $pagetable.php");
}
?>