<!-- variables in PHP. Très similaires à ceux en Javascript, à l'exception de "$" -->

<?php
$nom = "Gilbert";
$age = 24;
$nationality = "Kenyain";
$saisonActuelle = "Hiver";

// pour acceder la variable, il nous faut aussi la "$". fais attention.
echo $nom;
echo $nationality;

// constants are a bit different; plus similaire au javascript dans la sens qu'on utilise le mot-clé const. evidemment, on peut pas le rassigner.
const birthDate = "9th May 1996";

// how concatenating works in PHP
echo $nom . " qu'il est beau";
