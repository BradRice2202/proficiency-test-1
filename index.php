<?php

session_start();

// session_unset();

require 'vendor/autoload.php';

$m = new MongoDB\Client('mongodb://127.0.0.1:27017');

$db = $m->profTest1;

$collection = $db->Persons;

// $insertOneResult = $collection->insertOne([
//     'Name'=>'Bradley',
//     'Surname'=>'Rice',
//     'Date of Birth'=>'22-02-1997',
//     'ID Number'=>'9702225109083'
// ]);

$person1Arr = array();
$person2Arr = array();
$person3Arr = array();

if(isset($_POST['firstname1'])){
    $name1 = $_POST['firstName1'];
    $surname1 = $_POST['surname1'];

    $birthday = strval($_POST['birthdate1']);
    $birthday = explode('-',$birthday);
    $birthday = $birthday[2].'-'.$birthday[1].'-'.$birthday[0];
    $birthday1 = $birthday;
    $id1 = $_POST['idnumber1'];

    $person1Arr = ([
        'Name' => $name1,
        'Surname' => $surname1,
        'Birthday' => $birthday1,
        'Id'=>$id1
    ]);
    // header("Location: index.html");
}

if(isset($_POST['firstname2'])){
    $name2 = $_POST['firstName2'];
    $surname2 = $_POST['surname2'];

    $birthday = strval($_POST['birthdate2']);
    $birthday = explode('-',$birthday);
    $birthday = $birthday[2].'-'.$birthday[1].'-'.$birthday[0];
    $birthday2 = $birthday;
    $id2 = $_POST['idnumber2'];

    $person2Arr = ([
        'Name' => $name2,
        'Surname' => $surname2,
        'Birthday' => $birthday2,
        'Id'=>$id2
    ]);
    // header("Location: index.html");
}

if(isset($_POST['firstname3'])){
    $name3 = $_POST['firstName3'];
    $surname3 = $_POST['surname3'];

    $birthday = strval($_POST['birthdate3']);
    $birthday = explode('-',$birthday);
    $birthday = $birthday[2].'-'.$birthday[1].'-'.$birthday[0];
    $birthday3 = $birthday;
    $id3 = $_POST['idnumber3'];

    $person3Arr = ([
        'Name' => $name3,
        'Surname' => $surname3,
        'Birthday' => $birthday3,
        'Id'=>$id3
    ]);
    header("Location: cards.html");
}



// echo"<pre>";
// print_r($_POST);
// echo"<pre>";
// print_r($person2Arr);
// echo"<pre>";
// print_r($person3Arr);
// echo"<pre>";
exit;