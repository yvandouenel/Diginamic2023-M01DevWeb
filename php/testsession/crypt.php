<?php
include(dirname(__FILE__) . "/manage_users.php");
$users = read_users();
var_dump($users);
if(isLoggedIn($users, "admin", "admin")){
  echo "pwd ok";
} else echo PHP_EOL."<br>"."pb de login ou de mot de passe";

// maintenant que l'on a récupéré le tableau des utilisateur, on va créer une fonction isLoggedIn qui permet de vérifier si l'utilisateur est bien identifié (à tester avec admin, admin) 

/* $hashed_password = password_hash("admin", PASSWORD_DEFAULT);
echo $hashed_password;
if(password_verify('admin', $hashed_password)) {
  echo "mot de passe ok";
} else echo "<br>pb de mot de passe"; */