<?php

   $email = $_POST["email"];
   $pass = $_POST["pass"];
   $check = $_POST["check"];

//    echo ($email);
//    echo ($pass);
//    echo ($check);

$dbms = new mysqli("localhost", "root", "","db15", "3306");
$q = "SELECT * FROM `users` WHERE `email` = '".$email."' AND `password`='".$pass."'";

$rs = $dbms->query($q);
$n = $rs->num_rows;

echo($n);

if($n == 1){
    $d = $rs->fetch_assoc();

    if ($check == "true") {
        setcookie("email", $d["email"], time()+60 *60);
        setcookie("password", $d["password"], time()+60*60 );
    } else {
        setcookie("email", $d["email"], time());
        setcookie("password", $d["password"], time());
    }
    
}else{
    echo ("Invalid Email or passowrd");
}

?>