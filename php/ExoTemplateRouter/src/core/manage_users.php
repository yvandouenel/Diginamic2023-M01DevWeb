<?php
/**
 * Lit le fichier users.csv et renvoie un tableau associatif (clé = login, valeur = hash du mot de passe)
 * @return array
 */
function read_users()
{
  $users = [];// déclaration du tableau vide
  // ouverture du fichier users.csv
  if ($f = fopen(dirname(__FILE__) . '/../datas/users.csv', 'r')) {
    
    // lecture du fichier users.csv via la fonction fgetcsv
    while ($user = fgetcsv($f, null, ';')) {
      $users[$user[0]] = $user[1];
    }
    fclose($f);
    
  } else echo '<br>problème pour ouvrir le fichier users.csv<br>';
  return $users;
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
