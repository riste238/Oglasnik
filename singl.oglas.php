<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<?php 
 $oglas = getOglas($_GET['id']);?>

 <div class="container">
     <div class="row">
         <div class="col-10">
             <h3 class="display-4 text-center"><?php echo $oglas['title'] ?></h3>
             <div class="row">
                 <div class="col-5">
                     <div class="card">
                         <div class="card-header">
                             <a href="" class="btn btn-secondary"><?php echo $oglas['category']; ?></a>
                         </div>
                         <div class="card-body text-center">
                            <h5 class="mb-0"><?php echo $oglas['title']; ?></h5><br>
                            <p class="mt-0"> <?php echo $oglas['text']; ?></p>
                         </div>
                         <div class="card-footer">
                            <a href="" class="btn btn-warning btn-sm"><?php echo $oglas['name']; ?></a> 
                           <a href="" class="btn btn-danger btn-sm"><?php echo $oglas['price'];?></a> 
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
<?php require_once 'partials/bottom.php'; ?>