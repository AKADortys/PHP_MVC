<?php

require_once('classes/professeur.php');
require_once('classes/eleve.php');

$Thibault = new eleve('Ancel','Thibault','0473831423',new DateTime(),null);
$Logan = new eleve('Maes','Logan','0473831423',new DateTime(),null);

$Samuel = new professeur('Lassoie','Samuel', '0473234590',new DateTime(),14);
$Ahmed = new professeur('Sbai','Ahmed','0456789813',new DateTime(),14);


//var_dump = détaillé
//print_r = non détaillé

$Ahmed->ajouterEleve($Thibault);
$Ahmed->ajouterEleve($Logan);


echo '<pre>';

// print_r($Ahmed);
// print_r($Samuel);

// echo $Samuel->getNom().' '.$Samuel->getPrenom();
// echo '<br>';
// echo $Ahmed->getNom().' '.$Ahmed->getPrenom();

echo $Ahmed;
echo $Thibault;
echo $Logan;
echo $Ahmed->nbr_eleve(). ' élève(s)'.'<br>';
// print_r($Ahmed);
// print_r($Samuel);

