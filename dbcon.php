
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

$con = mysqli_connect("localhost","root","","blog");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}

?>