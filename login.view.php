<?php require_once 'partials/head.php'; ?>
<?php require_once 'partials/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form action="login.php" method="post">
                <input type="email" name="email" class="form-control" placeholder="email"><br>
                <input type="password" name="password" class="form-control" placeholder="password"><br>
                <button type="submit" class="btn btn-primary form-control">Login</button>
            </form>
        </div>
    </div>
</div>
<?php require_once 'partials/bottom.php'; ?>