<?php 
session_start();
if(isset($_COOKIE['username'])){

echo 'Username is '. $_COOKIE['username'] . '<br>';
echo 'Password is '.$_COOKIE['password'];
}else{
    echo 'cookies are not defined. <br>';
}

if(isset($_SESSION['username'])){

echo 'Username is '. $_SESSION['username']. '<br>';
echo 'Password is '. $_SESSION['password']. '<br>';
}else{
    echo 'sessions are not defined. <br>';
}
?>