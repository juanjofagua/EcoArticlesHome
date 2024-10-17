<?php
$db = mysqli_connect('localhost', 'root', 'root', 'ecoarticleshome');

if(!$db){
    echo "hubo un error";
    exit;
}

