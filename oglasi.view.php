<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php require_once 'function.php'; ?>
 <?php $oglasi = getAll();

    
 ?>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1">
            <h1 class="display-4">Oglasi</h1>
<!-- kreiraj cards so momentalnite oglasi -->
<div class="row">
    <?php foreach($oglasi as $oglas): ?>
            <div class="col-4">
                <div class="card mb-2 mt-2">
                    <div class="card-header ">
                        <a href="show.category.php?cat=<?php echo $oglas['category']; ?>" class="btn btn-secondary "><?php echo $oglas['category']; ?></a>
                    </div>
                    <div class="card-body  text-center">
                        <h5><?php echo $oglas['title']; ?></h5>
                        <a href="singl.oglas.php?id=<?php echo $oglas['id']; ?>" class="btn btn-light btn-sm">Vidi Oglas</a>
                    </div>
                    <div class="card-footer">
                        <a href="oglasi_from_user.php?name=<?php echo $oglas['name']; ?>" id="btn-left" class="btn btn-warning btn-sm">
                            <?php echo $oglas['name']; ?></a>
                            
                        <a href="#" id="btn-right" class="btn btn-danger btn-sm ">
                            <?php echo $oglas['price']; ?>
                        </a>
                    </div>
                </div>
            </div>
    <?php endforeach; ?>
</div>
        </div>
    </div>
</div>
<?php require_once 'partials/bottom.php'; ?>
