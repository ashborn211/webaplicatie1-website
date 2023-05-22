<?php
include_once('db.php');
var_dump($_POST);
{
        if(isset($_POST['email']) && isset($_POST['password'])){
            var_dump($_POST);
            if($_POST['email'] == ""){
                echo 'email can\'t be empty <br>';
            }
            if($_POST['password'] == ""){
                echo 'password can\'t be empty <br>';
            }
           
        }
       
    }
    
    ?>
