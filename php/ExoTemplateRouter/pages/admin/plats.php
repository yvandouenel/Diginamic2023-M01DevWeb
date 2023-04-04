<?php
include_once(dirname(__FILE__) . "/../../src/datas/plats.php");
include_once(dirname(__FILE__) . "/../../src/cantine/plats.php");
?>
<nav class="d-flex gap-4">
    <a href="index.php?page=admin&action=add&categorie=entrée" class="my-5 bi bi-plus link-dark">Ajouter une entrée</a>
    <a href="index.php?page=admin&action=add&categorie=plat" class="my-5 bi bi-plus link-dark">Ajouter un plat</a>
    <a href="index.php?page=admin&action=add&categorie=dessert" class="my-5 bi bi-plus link-dark">Ajouter un dessert</a>
</nav>

<table class='table table-dark table-striped'>
    <thead>
        <th scope='col'>
            Catégorie
            <a href='index.php?page=plats&tricat=<?php echo (isset($_GET['tricat']) && $_GET['tricat'] === 'asc') ?  'desc' :  'asc'; ?>' class="link-light">
                <?php echo (isset($_GET['tricat']) && $_GET['tricat'] === 'asc') ?  '<i class="bi bi-arrow-down-circle"></i>' :  '<i class="bi bi-arrow-up-circle"></i>'; ?>
            </a>
        </th>
        <th scope='col'>Nom du plat
            <a href='index.php?page=plats&tri=<?php echo (isset($_GET['tri']) && $_GET['tri'] === 'asc') ?  'desc' :  'asc'; ?>' class="link-light">
                <?php echo (isset($_GET['tri']) && $_GET['tri'] === 'asc') ?  '<i class="bi bi-arrow-down-circle"></i>' :  '<i class="bi bi-arrow-up-circle"></i>'; ?>
            </a>
        </th>
        <th scope='col'>Action
        </th>
    </thead>
    <?php
    if (isset($_GET['tri'])) {
        $aliments = tri_plats($tab, $_GET['tri']);
        foreach ($aliments as $key => $value) {
            echo '<tr><td>' . $value . '</td><td>' . $key . '</td><td><a  class="text-white" class="text-white" href="/index.php?page=admin&action=delete&key=' . $key . '&value=' . $value . '">Supprimer</a></td></tr>';
        }
    } else {
        if (isset($_GET['tricat'])) {
            $tab = tri_categories($tab, $_GET['tricat']);
        }
        foreach ($tab as $key => $value) {
            foreach ($value as $plat) {
                echo "\t" . PHP_EOL . '<tr>' .
                    "\t\t" . PHP_EOL . '<td>' . $key . '</td>' .
                    "\t\t" . PHP_EOL . '<td>' . $plat . '</td>' .
                    "\t\t" . PHP_EOL . '<td>' .
                    "\t\t\t" . PHP_EOL . '<div class="d-flex gap-4">' .
                    "\t\t\t\t" . PHP_EOL . '<a class="text-white" href="/index.php?page=admin&action=delete&key=' . $key . '&value=' . $plat . '">Supprimer</a>' .
                    "\t\t\t\t" . PHP_EOL . '<a class="text-white" href="/index.php?page=admin&action=update&key=' . $key . '&value=' . $plat . '">Mettre à jour</a>' .
                    "\t\t\t" . PHP_EOL . '</div>' .
                    "\t\t" . PHP_EOL . '</td>' .
                    "\t" . PHP_EOL . '<tr>';
            }
        }
    }
    ?>
</table>