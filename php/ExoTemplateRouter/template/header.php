
<header>
    <nav>
        <ul class="list-unstyled d-flex gap-3">
            <li><a href="/index.php?page=index" class="btn btn-secondary">Accueil</a></li>
            <li><a href="/index.php?page=plats" class="btn btn-secondary">Plats</a></li>
            <li><a href="/index.php?page=menus" class="btn btn-secondary">Menus</a></li>
            <?php if (isset($_SESSION) && !$_SESSION["login"] ) {  ?>
                <li><a href="/index.php?page=login" class="ms-4 btn btn-warning">Se connecter</a></li>
            <?php } ?>
            <?php if (isset($_SESSION) && $_SESSION["login"]) {  ?>
                <li><a href="/index.php?page=logout" class="ms-5 btn btn-warning">Se Déconnecter</a></li>
                <li><a href="/index.php?page=admin&action=plats" class="btn btn-warning">Administrer les plats</a></li>
            <?php } ?>
        </ul>
    </nav>
</header>