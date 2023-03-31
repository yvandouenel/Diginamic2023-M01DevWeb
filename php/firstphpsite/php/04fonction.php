<?php

declare(strict_types=1);
function addition(int $a, int $b): int
{
  return $a + $b;
}
$result = addition(2, 5);
echo $result;
echo PHP_EOL;

// this text was used in 2002
// we want to get this up to date for 2003
$text = "April fools day is 04/01/1999\n";
$text .= "Last christmas was 12/24/2002\n";
// the callback function
function next_year($matches)
{
  // as usual: $matches[0] is the complete match
  // $matches[1] the match for the first subpattern
  // enclosed in '(...)' and so on
  echo "dans next_year" . PHP_EOL;
  return $matches[1] . ($matches[2] + 1);
}
echo preg_replace_callback(
  "|(\d{2}/\d{2}/)(\d{4})|",
  'next_year',
  $text
);


function helloWorld()
{
  echo "Hello World";
  echo PHP_EOL;
}

$ma_variable = 'helloWorld';
$ma_variable(); // appelle helloWorld()
var_dump($ma_variable());

//Fonctions et portée des variables
$a = 10;
decremente();
echo "Valeur de a en dehors de la fonction: ".$a.PHP_EOL;
$retour = retour();
echo $retour.PHP_EOL;

// La variable n'est pas connue à l'intérieur de la fonction.
function decremente() {
    $a = 5;
    echo "Valeur de a à l'intérieur de la fonction (la variable a à 
    l'intérieur de la fonction n'est pas la même qu'à l'extérieur: ".$a.PHP_EOL;
}

// Fonctions avec valeur de retour
function retour() {
    return "je suis une valeur de retour";
}

// Déclarer une variable globale
$var = 5;
globale();
echo $var . PHP_EOL;
outglobal();
echo $var . PHP_EOL;

function globale()
{
    global $var;
    $var = 10;
}

function outglobal()
{
    $var = 15;
}

// A partir de PHP8
paramsVar(96, 54, 87, 2);
function paramsVar(...$params)
{
    foreach ($params as $value) {
        echo 'Argument de fonction: ' . $value . PHP_EOL;
    }
}

$mess = "Message";
$example = function () use(&$mess) {
  
    $mess .= " pour bobo";
    echo $mess;
};
$example();
echo PHP_EOL;
echo $mess;

$test = function () {
  echo PHP_EOL;
  echo "test";
};
$test();