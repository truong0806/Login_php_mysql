<?php

if(isset($_POST('uname')) && isset('password')){
    function validate($data)
    $uname = $_POST['uname'];
    $pass = $_POST['password'];
}else{
    header("Location: index.php")
    exit();
}