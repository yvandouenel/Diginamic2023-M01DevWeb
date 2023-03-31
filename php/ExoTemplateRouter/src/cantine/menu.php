<?php

/**
 * Crée des menus à partir du tableau food avec un élément de chaque clé
 *
 *
 * @param array $food le tableau des ingrédients rangés par type
 * @param int $i le nombre de menus à créer
 * @param mixed $jouravant le tableau des indices des éléments tirés au hasard pour le menu-1
 * @return void
 */
function createRandomMenu($food, $i, $jouravant=null) {
    $return = [];
    echo "<tr>";
    foreach ($food as $key => $value) {
        $minimum = 0;
        if (is_array($value) ) {
            if ($jouravant === null || !array_key_exists($key,$jouravant)) {
                $jouravant[$key] = null;
            }
            $maximum = count($value)-1;
            if ($maximum > -1) {
                do {
                    if ($maximum > 0) {
                        $alea = random_int($minimum,$maximum);
                    } elseif ($jouravant[$key] === null) {
                        $alea = 0;
                    } else {
                        $alea = null;
                    }
                } while ($jouravant[$key] === $alea && $maximum > 0);
                if ($alea !== null) {
                    echo "<td>".$value[$alea].'</td>';
                }
                $return[$key] = $alea;
            }
        }
    }
    echo '</tr>';
    if ($i > 1) {
        $i = $i-1;
        createRandomMenu($food,$i,$return);
    }

}