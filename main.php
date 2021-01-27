<!-- variables in PHP. Très similaires à ceux en Javascript, à l'exception de "$" -->

<?php
// String
$nom = "Gilbert";
$ami = "Denisa";
$language = "PHP";
$nationality = "Kenyain";
$saisonActuelle = "Hiver";

// Integer
$age = 24;
$joursParSemaine = 7;
$semainesParAn = 52;

// Float
$kmToMiles = 2.2;
$pi = 3.1415;

// Boolean 
$isHandsome = true;
$isFarFromGoal = true;
$likesWinter = false;
// true = 1 and false = 0;

//Array
$names = array("Gilbert", "Denisa", "Kim", "Diego", "Edin", "Teresa", "Ari");
echo $names[0];



// pour acceder la variable, il nous faut aussi la "$". fais attention.
echo $nom;
echo $nationality;

// constants are a bit different; plus similaire au javascript dans la sens qu'on utilise le mot-clé const. evidemment, on peut pas le rassigner.
const birthDate = "9th May 1996";

// how concatenating works in PHP
echo $nom . " qu'il est beau";
