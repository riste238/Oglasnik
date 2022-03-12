<?php require_once 'partials/head.php'; ?>
<?php 
  if(!isset($_SESSION['id'])){
      header("Location index.php");
  }
?>
<?php require_once 'partials/navbar.php'; ?>
   <div class="container">
       <div class="row">
           <div class="col-6 offset-3">
               <h3 class="text-center mb-3">Nov oglas</h3>

               <form action="new.add.php" method="POST">

                <input type="text" name="title" placeholder="title" class="form-control"><br>
                <input type="text" name="text" placeholder="text" class="form-control"><br>
                <input type="number" name="price" placeholder="price" class="form-control"><br>
                <select name="category"class="form-control">
                 
                <option value="computer" class="form-control">computer</option>
                <option value="bela tehnika" class="form-control">bela tehnika</option>
                <option value="book" class="form-control">book</option>
                <option value="phone" class="form-control">phone</option>
                </select><br>
                <button type="submit" class="btn btn-info form-control">Add new</button>        
               </form>
           </div>
       </div>
   </div>
 
<?php require_once 'partials/bottom.php'; ?>

