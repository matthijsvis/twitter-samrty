<?php
/**
 * Created by PhpStorm.
 * User: matthijs
 * Date: 14-06-18
 * Time: 14:31
 */

try {
    $db = new PDO('mysql:host=localhost; dbname=tweet', 'root', 'root');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $error){
    echo '<pre>';
    echo 'regel'.$error -> getLine().'<br>';
    echo 'bestand'.$error -> getFile().'<br>';
    echo 'foutmelding: '.$error ->getMessage();
    echo '</pre>';
}