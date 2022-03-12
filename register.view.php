<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="register.php" method="POST">
            <input type="text" name="name" class="form-control" placeholder="name"><br>
                <input type="email" name="email" class="form-control" placeholder="email"><br>
                <input type="password" name="password" class="form-control" placeholder="password"><br>
                <button type="submit" class="btn btn-info form-control">Register</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/bottom.php'; ?>