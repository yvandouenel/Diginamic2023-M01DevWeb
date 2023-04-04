<?php
function read_users()
{
  // ouverture du fichier users.csv
  if ($f = fopen(dirname(__FILE__) . '/users.csv', 'r')) {
    while ($user = fgetcsv($f, null, ';')) {
      $users[$user[0]] = $user[1];
    }
    fclose($f);
    return $users;
  }
}
 /**
  * Teste si l'utilisateur est bien identifié via users.csv
  * @return boolean
  */
function isLoggedIn($users, $passwd, $login)
{
  foreach ($users as $log => $hash) {
    if(password_verify($passwd, $hash) && trim($log) === trim($login)) return true;
    return false;
  }
}
