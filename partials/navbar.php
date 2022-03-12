<?php require_once 'partials/head.php'; ?>
<nav class= "navbar navbar-expand-lg navbar-light bg-light">
    <a href="index.php" class="navbar-brand">Oglasi</a>
    <?php if(isset($_SESSION['id'])){
        require_once 'partials/navbar_logged.php';
    }
    else {
        require_once 'partials/navbar-login.php';

    };
    
    ?>
</nav>
