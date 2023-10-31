<?php 

// Heredoc php : permet d'écrire des strings multiligne 

$str = "
Nom du patient : Emile 
Nom du patient : Martin 
Nom du patient : Erféro 
Nom du patient : Warris 
";

$str2 = "
johndoe@gmail.com
JohnDoe@gmail.com
johnDoe@gmail.com
";

$str3 = "
Salut à tout le monde 
Salut à tous 
";

$str4 = "Le numéro de téléphone est : 229-97258567";

$regexp = "/(?<=Nom du patient : ).+/";
$regexp2 = "/[a-z]+@gmail.com/i";
$regexp3 = "/^Salut[a-zA-Z0-9 ]+tous$/";
$regexp4 = "/(\d{3})-(\d{8})/";


// preg_match_all pour trouver toutes les correspondances d'une chaîne de caractère
preg_match($regexp4, $str4, $matches);


// Extraire le numéro de téléphone de la chaîne de caratère 
if (count($matches) > 0) {
    $indicatif = $matches[1];
    $numero = $matches[2]; 

    // Le numéro en complet 
    $numeroFormte = '+'."$indicatif $numero";
    // echo $numeroFormte;
}

// Remplacer les expressions régulières par des ###
$text_formate = preg_replace($regexp4, "+$1 $2", $str4);
echo $text_formate;
