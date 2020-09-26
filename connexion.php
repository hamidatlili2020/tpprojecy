<?php
try {
    $pdo=new PDO("mysql:host=localhost;dbname=biellersql","root","");

}catch (PDOException $e){
    echo $e->getMessage();

}