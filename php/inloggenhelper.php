<form action="post.php" method="post">
        email
        <input type="email" name="email" id="" 
        placeholder="email">
        password
        <input type="password" name="password" id="">
        <input type="submit" value="login">
    </form>

<?php
if(isset($_POST["email"]) && isset($_POST["password"])){
    if($_POST["email"] == 'velican@gmail.com' && 
    $_POST["password"] == 'velican'){
        echo 'success';
    }
}
//var_dump($_POST);
//var_dump($_POST["email"]);

if(isset($_POST['email']) && isset($_POST['password'])){
    //var_dump($_POST);
    if($_POST['email'] == ""){
        echo 'email can\'t be empty <br>';
    }
    if($_POST['password'] == ""){
        echo 'password can\'t be empty <br>';
    }
    if($_POST['email'] == "admin" && $_POST['password'] == "12345"){
        echo 'hello admin';
    }
}
?>