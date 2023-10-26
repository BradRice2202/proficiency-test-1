<?php

// use MongoDB\Operation\Find;
// use MongoDB\Operation\FindOne;

// use MongoDB\Operation\Find;

session_start();

require 'vendor/autoload.php';

$m = new MongoDB\Client('mongodb://127.0.0.1:27017');

$db = $m->profTest1;

$collection = $db->Persons;





// function checkForDuplicateId($id){

//     $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

//     $m = new MongoDB\Client('mongodb://127.0.0.1:27017');

//     $db = $m->profTest1;

//     $collection = $db->Persons;

//     $findId = [
//         "id" => $id,
//     ];
    
//     $cursor = $collection->find($findId);

//     if($cursor){

//         echo"$id";

//         return false;

//     }else{
//         return true;
//     };

// };



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
}


if (isset($_POST['submitPeople'])) 
{
    // go into DB

    // select ID's

    // check if there is an ID which matches the ID that is being sent through.

    // if ID exists throw an error

    // if ID does not exist insert new person into DB

    // $id = filter_input(INPUT_POST, 'ID Number', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // $findId = [
    //     "ID Number" => $_POST['idnumber1'],
    // ];


    $person1Arr = array();
    $name1 = $_POST['firstName1'];
    $surname1 = $_POST['surname1'];

    $birthday = strval($_POST['birthdate1']);
    $birthday = explode('-', $birthday);
    $birthday = $birthday[2] . '/' . $birthday[1] . '/' . $birthday[0];
    $birthday1 = $birthday;
    $id1 = $_POST['idnumber1'];

    $person1 = ([
        'Name' => $name1,
        'Surname' => $surname1,
        'Birthdate' => $birthday1,
        'ID Number' => $id1,
    ]);

    
    

    $collection = $m->profTest1->Persons;

    if(!$collection->count()){
        // echo"HERE";
        // $insertOneResult = $collection->insertOne($person1);
    }else{
        // echo"HERE 2";
        $cursor = $collection->find();

        $IdArray = [];

        if($cursor){

            // echo" HERE CURSER EXISTS ";

            foreach ( $cursor as $id => $value ) // Getting existing ID Numbers in DB
            {
            // echo" Here2 ";
            // echo"<pre>";
            // echo "$id: ";
            // print_r($value["ID Number"]);

            array_push($IdArray, $value["ID Number"]);

            // echo"<pre>";
            // print_r($IdArray);

                // if($value["ID Number"] == $_POST["idnumber1"]){
                //     echo" ID Exists ";
                //     // exit;
                //     // return;
                //     // header("Location:home.php?idError=existing");
                // }else{
                //     $insertOneResult = $collection->insertOne($person1);
                //     echo" new id ";
                //     // exit;
                //     // header("Location:home.php?inserted=true");
                // }

            }
        }else{
            // $insertOneResult = $collection->insertOne($person1);
        }
    }

    $found = in_array($_POST["idnumber1"], $IdArray);

    if($found){
        echo"FOUND";
    }else{
        $insertOneResult = $collection->insertOne($person1);
        echo"NOT FOUND";
    }


    // $cursor = $collection->find();


    // if($cursor){

    //     echo"HERE CURSER EXISTS";

    //     foreach ( $cursor as $id => $value ) // Getting existing ID Numbers in DB
    //     {
    //     // echo"Here2";
    //     // echo"<pre>";
    //     // echo "$id: ";
    //     // print_r($value["ID Number"]);

    //         if(!$value["ID Number"] == $_POST["idnumber1"]){
    //             echo"ID Exists";
    //             exit;
    //             // header("Location:home.php?idError=existing");
    //         }else{
    //             $insertOneResult = $collection->insertOne($person1);
    //             echo"new id";
    //             exit;
    //             // header("Location:home.php?inserted=true");
    //         }

    //     }
    // }else{
    //     $insertOneResult = $collection->insertOne($person1);
    // }
    


    // if(!$cursor){

    //     echo"$id";

    //     $insertOneResult = $collection->insertOne($person1);
        

    //     // return false;

    // }else{

    //     echo"$id";

    //     echo"DUPLICATE ID";

    //     // return true;
    // };
    

    // $person2Arr = array();
    // $name2 = $_POST['firstName2'];
    // $surname2 = $_POST['surname2'];

    // $birthday = strval($_POST['birthdate2']);
    // $birthday = explode('-', $birthday);
    // $birthday = $birthday[2] . '/' . $birthday[1] . '/' . $birthday[0];
    // $birthday2 = $birthday;
    // $id2 = $_POST['idnumber2'];

    // $person3Arr = array();
    // $name3 = $_POST['firstName3'];
    // $surname3 = $_POST['surname3'];

    // $birthday = strval($_POST['birthdate3']);
    // $birthday = explode('-', $birthday);
    // $birthday = $birthday[2] . '/' . $birthday[1] . '/' . $birthday[0];
    // $birthday3 = $birthday;
    // $id3 = $_POST['idnumber3'];

    // $_SESSION['peopleArr'] = ([
        

        // $person2 = ([
        //     'Name' => $name2,
        //     'Surname' => $surname2,
        //     'Birthdate' => $birthday2,
        //     'ID Number' => $id2,
        // ]),
        // $person3 = ([
        //     'Name' => $name3,
        //     'Surname' => $surname3,
        //     'Birthdate' => $birthday3,
        //     'ID Number' => $id3,
        // ])
    // ]);

    // $duplicateId = checkForDuplicateId($id1);

    // if($duplicateId){
    //     echo"duplicate ID";
    // }else{
    //     $insertOneResult = $collection->insertOne($person1);
    // }


    // header("Location:home.php?created=true&uploaded=0");

    // header("Location:home.php?created=true");
}

// if (isset($_GET['upload'])) 
// {
//     if($_GET['upload'] == 0)
//     {

//         $insertOneResult = $collection->insertOne($_SESSION['peopleArr'][0]);
//         header("Location:home.php?created=true&uploaded=0");

//     }
//     elseif($_GET['upload'] == 1)
//     {

//         $insertOneResult = $collection->insertOne($_SESSION['peopleArr'][1]);
//         header("Location:home.php?created=true&uploaded=1");

//     }
//     elseif($_GET['upload'] == 2)
//     {
//         $insertOneResult = $collection->insertOne($_SESSION['peopleArr'][2]);
//         header("Location:home.php?created=true&uploaded=2");
//     }
// };

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
