<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
require_once(dirname(__FILE__)."/template/head.php")
?>

<body>
    <div class="container">
        <!-- // importer header.php ici -->
        <?php 
        require_once(dirname(__FILE__)."./template/header.php")
        ?>
       
        <main>
        <!-- // importer router.php ici -->
        <?php 
        require_once(dirname(__FILE__)."./src/core/router.php")
        ?>
        </main>
        
        <!-- importer footer.php ici -->
        <?php 
        require_once(dirname(__FILE__)."./template/footer.php")
        ?>
        
    </div>
</body>

</html>