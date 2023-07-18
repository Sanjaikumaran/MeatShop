<?php

class user{ 

public static function signup($username,$mail,$password){

$conn=database::getConnection();

$sql="INSERT INTO `login` (`username`,`email`,`password`)
    VALUES('$username','$mail','$password')";

if($conn->query($sql)==TRUE){
    return true;
}
else{
    return false;
}
}

public static function login($username, $password)
{

    $conn=database::getConnection();
    
    $sql="SELECT * FROM  `login` WHERE `username` = '$username'";
    $out = $conn->query($sql);
    
    if($out->num_rows == 1){
        $row = $out->fetch_assoc();
        if($row['password'] == $password)
        {
            return true;
    }
    else{
        ?><script>alert('Invalid password!\nGo back!')</script><?php
        return false;
    }
}
    else{
        ?><script>alert('Invalid user!\nGo back!')</script><?php
    }

}
}

function load_template($name)
{
    include "C:\\xampp\htdocs\meat-shop-main\__templates\\$name.html";
}