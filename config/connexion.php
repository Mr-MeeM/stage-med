<?php
try {
    $access=new pdo("mysql:host=localhost;dbnane=sall555e-de-sport; charset=utf8", "root", "");
    $access->setattribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_WARNING);
 } catch (Exception $e)
 {  $e->getMessage();} 