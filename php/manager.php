<?php
/*
    CRUD
    *Create
    *Read
    *Update
    *Delete
*/


require('config.php');
if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name =  $_POST['name'];

    if ( !validate($name) ) {
        redirect('../index.php', 'Item niet of niet goed ingevuld');
    }

    $input['name'] = $name;

    if ( add($db, $input) ) {
        redirect('../index.php', 'Item niet of niet goed ingevuld');
    }

    echo 'Iets is fout gegaan met de database connectie, neem contact op met de administrator';
    die;
}



// tod0 lijstje
function validate($input) {
    //checken of die niet leeg is.
    //kijken of hij niet meer dan 255 chars heeft.
    if ( !empty($input) &&strlen($input) < 265 ) {
        return true;
    }
    return false;
}

function redirect($url, $message) {
    $url = $url . '?message=' . $message;
    header('location:' . $url);
    die;
}

function add($db, $input) {

    $name = $input['name'];
    $sql = "INSERT INTO student_register (name) 
            VALUE ('$name')";

    if (!$db->query($sql)) {
        return false;
    }
    return true;
}