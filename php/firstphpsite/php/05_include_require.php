<?php
include_once("./variables.php");
include_once("./utils/readline.php");
echo $i;
echo PHP_EOL;

do {
  $input =  readline("Etes vous sûr de vouloir exécuter ce script (o/n) ? ");
  if ($input == "o") {
    echo "toto";
    break;
  } else if ($input == "n"){
    echo "arrivederci";
    break;
  }

} while ($input);