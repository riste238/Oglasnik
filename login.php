<?php 
    require_once 'function.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query(db(), $sql);
    $user = mysqli_fetch_assoc($query);

    if($user){
        logUser($user);
      
    }
    else {
        header("Location: login.view.php");
    }
?>