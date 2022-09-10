<?php
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (trim($name) == ""){
        echo "Ви не ввели ім'я користувача";
    }else if
        (strlen(trim($name)) <= 1)
       echo "Такого імя не існує";
    else{
       $_POST['password'] = md5($password);
      echo "<h1>Всі дані</h1>";
       foreach ($_POST as $key => $value)
           echo "<p>$value<p/>";
    }