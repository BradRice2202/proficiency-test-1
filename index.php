<?php

session_start();

require 'vendor/autoload.php';

$m = new MongoDB\Client('mongodb://127.0.0.1:27017');

$db = $m->profTest1;

$collection = $db->Persons;

function addPersonInfo($personArr, $name, $surname, $dob, $id)
{

    $personArr = $personArr;

    $personArr = array();

    $personArr = array([
        'Name' => $name,
        'Surname' => $surname,
        'Birthdate' => $dob,
        'ID number' => $id,
    ]);

    return $personArr;
};

if (isset($_POST['submitPeople'])) 
{
    $person1Arr = array();
    $name1 = $_POST['firstName1'];
    $surname1 = $_POST['surname1'];

    $birthday = strval($_POST['birthdate1']);
    $birthday = explode('-', $birthday);
    $birthday = $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0];
    $birthday1 = $birthday;
    $id1 = $_POST['idnumber1'];

    $person2Arr = array();
    $name2 = $_POST['firstName2'];
    $surname2 = $_POST['surname2'];

    $birthday = strval($_POST['birthdate2']);
    $birthday = explode('-', $birthday);
    $birthday = $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0];
    $birthday2 = $birthday;
    $id2 = $_POST['idnumber2'];

    $person3Arr = array();
    $name3 = $_POST['firstName3'];
    $surname3 = $_POST['surname3'];

    $birthday = strval($_POST['birthdate3']);
    $birthday = explode('-', $birthday);
    $birthday = $birthday[2] . '-' . $birthday[1] . '-' . $birthday[0];
    $birthday3 = $birthday;
    $id3 = $_POST['idnumber3'];

    $_SESSION['peopleArr'] = ([
        $person1 = ([
            'Name' => $name1,
            'Surname' => $surname1,
            'Birthdate' => $birthday1,
            'ID Number' => $id1,
        ]),
        $person2 = ([
            'Name' => $name2,
            'Surname' => $surname2,
            'Birthdate' => $birthday2,
            'ID Number' => $id2,
        ]),
        $person3 = ([
            'Name' => $name3,
            'Surname' => $surname3,
            'Birthdate' => $birthday3,
            'ID Number' => $id3,
        ])
    ]);

    header("Location:home.php?created=true");
}

if (isset($_GET['upload'])) 
{
    if($_GET['upload'] == 0)
    {

        $insertOneResult = $collection->insertOne($_SESSION['peopleArr'][0]);
        header("Location:home.php?created=true&uploaded=0");

    }
    elseif($_GET['upload'] == 1)
    {

        $insertOneResult = $collection->insertOne($_SESSION['peopleArr'][1]);
        header("Location:home.php?created=true&uploaded=1");

    }
    elseif($_GET['upload'] == 2)
    {
        $insertOneResult = $collection->insertOne($_SESSION['peopleArr'][2]);
        header("Location:home.php?created=true&uploaded=2");
    }
};

if(isset($_GET['remove']))
{
    if($_GET['remove'] == 0)
    {
        $deleteOneResult = $collection->deleteOne($_SESSION['peopleArr'][0]);
        $_SESSION['peopleArr'][0] = null;
        header("Location:home.php?created=true&removed=0");
    }
    elseif($_GET['remove'] == 1)
    {
        $deleteOneResult = $collection->deleteOne($_SESSION['peopleArr'][1]);
        $_SESSION['peopleArr'][1] = null;
        header("Location:home.php?created=true&removed=1");
    }
    elseif($_GET['remove'] == 2)
    {
        $deleteOneResult = $collection->deleteOne($_SESSION['peopleArr'][2]);
        $_SESSION['peopleArr'][2] = null;
        header("Location:home.php?created=true&removed=2");
    }
}

if(isset($_POST['restart'])){
    if(isset($_SESSION['peopleArr'][0])){
        $deleteOneResult = $collection->deleteOne($_SESSION['peopleArr'][0]);
        $_SESSION['peopleArr'][0] = null;
    }
    if(isset($_SESSION['peopleArr'][1])){
        $deleteOneResult = $collection->deleteOne($_SESSION['peopleArr'][1]);
        $_SESSION['peopleArr'][1] = null;
    }
    if(isset($_SESSION['peopleArr'][2])){
        $deleteOneResult = $collection->deleteOne($_SESSION['peopleArr'][2]);
        $_SESSION['peopleArr'][2] = null;
    }
    header("Location:home.php?restart=true");
}
