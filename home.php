<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="alert alert-success" id="dbSuccess" role="alert">
        Successfully added to database!!
    </div>
    <div class="alert alert-danger" id="removeOneSuccess" role="alert">
        Record deleted from database!
    </div>
    <div class="alert alert-danger" id="removeAllSuccess" role="alert">
        All records deleted from database!
    </div>
    <div class="container the-container align-items-center" id="the-container">
        <form action="index.php" method="post" id="personalDetailsForm" name="personalDetailsForm">
            <div class="mainContainer" id="mainContainer">
                <div class="personsInput d-flex justify-content-center">
                    <div class="left">
                        <div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label d-flex justify-content-center" required>Name:</label>
                                <input type="text" class="form-control" id="name1Input" name="firstName1">
                                <label id="name1Input-error" class="error error-label text-danger d-flex justify-content-center" for="name1Input"></label>
                            </div>
                            <div class="mb-3">
                                <label for="surnameInput" class="form-label d-flex justify-content-center">Surname:</label>
                                <input type="text" class="form-control" id="surname1Input" name="surname1">
                                <label id="surnameInput-error" class="error error-label text-danger d-flex justify-content-center" for="surname1Input"></label>
                            </div>
                            <div class="mb-3">
                                <label for="birthDateInput" class="form-label d-flex justify-content-center">Date of birth:</label>
                                <input type="date" class="form-control" id="birthDate1InputLeft" name="birthdate1"onchange="addToIdFromDobLeft()">
                                <label id="birthDateInput-error" class="error error-label text-danger d-flex justify-content-center"for="birthDate1InputLeft"></label>
                            </div>
                            <div class="mb-3">
                                <label for="idNoInput" class="form-label d-flex justify-content-center">ID Number:</label>
                                <input type="text" class="form-control" id="idNo1InputLeft" name="idnumber1">
                                <label id="idNoInput-error" class="error error-label text-danger d-flex justify-content-center" for="idNo1InputLeft"></label>
                            </div>
                        </div>
                    </div>
                    <div class="middle">
                        <div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label d-flex justify-content-center">Name:</label>
                                <input type="text" class="form-control" id="name2Input" name="firstName2">
                                <label id="nameInput-error" class="error error-label text-danger d-flex justify-content-center" for="name2Input"></label>
                            </div>
                            <div class="mb-3">
                                <label for="surnameInput" class="form-label d-flex justify-content-center">Surname:</label>
                                <input type="text" class="form-control" id="surname2Input" name="surname2">
                                <label id="surnameInput-error" class="error error-label text-danger d-flex justify-content-center" for="surname2Input"></label>
                            </div>
                            <div class="mb-3">
                                <label for="birthDateInput" class="form-label d-flex justify-content-center">Date of birth:</label>
                                <input type="date" class="form-control" id="birthDate2InputMiddle" name="birthdate2" onchange="addToIdFromDobMiddle()">
                                <label id="birthDateInput-error" class="error error-label text-danger d-flex justify-content-center" for="birthDate2InputMiddle"></label>
                            </div>
                            <div class="mb-3">
                                <label for="idNoInput" class="form-label d-flex justify-content-center">ID Number:</label>
                                <input type="text" class="form-control" id="idNo2InputMiddle" name="idnumber2">
                                <label id="idNoInput-error" class="error error-label text-danger d-flex justify-content-center" for="idNo2InputMiddle"></label>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label d-flex justify-content-center">Name:</label>
                                <input type="text" class="form-control" id="name3Input" name="firstName3">
                                <label id="nameInput-error" class="error error-label text-danger d-flex justify-content-center" for="name3Input"></label>
                            </div>
                            <div class="mb-3">
                                <label for="surnameInput" class="form-label d-flex justify-content-center">Surname:</label>
                                <input type="text" class="form-control" id="surname3Input" name="surname3">
                                <label id="surnameInput-error" class="error error-label text-danger d-flex justify-content-center" for="surname3Input"></label>
                            </div>
                            <div class="mb-3">
                                <label for="birthDateInput" class="form-label d-flex justify-content-center">Date of birth:</label>
                                <input type="date" class="form-control" id="birthDate3InputRight" name="birthdate3" onchange="addToIdFromDobRight()">
                                <label id="birthDateInput-error" class="error error-label text-danger d-flex justify-content-center" for="birthDate3InputRight"></label>
                            </div>
                            <div class="mb-3">
                                <label for="idNoInput" class="form-label d-flex justify-content-center">ID Number:</label>
                                <input type="text" class="form-control" id="idNo3InputRight" name="idnumber3">
                                <label id="idNoInput-error" class="error error-label text-danger d-flex justify-content-center" for="idNo3InputRight"></label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="submitBtnsContainer">
                    <div class="btnsContainer">
                        <button type="submit" class="btn btn-primary mx-1 submit-people-btn" name="submitPeople">Post</button>
                        <button type="button" class="btn btn-danger mx-1 clear-people-btn" onClick="window.location.reload();">Cancel</button>
                    </div>
                </div>
            </div>
        </form> 
    </div>
    <div class="container main-cards-container" id="main-cards-container">
        <div class="cards-container">
            <div class="left-card-container">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title" id="personName1"><?php echo $_SESSION['peopleArr'][0]['Name']." ".$_SESSION['peopleArr'][0]['Surname'] ?></h5>
                      <h4>Birthdate: <?php echo $_SESSION['peopleArr'][0]['Birthdate'] ?></h4>
                      <h4>ID: <?php echo $_SESSION['peopleArr'][0]['ID Number'] ?>
                      </h4>
                      <a href="index.php?upload=0" class="btn btn-primary">Upload to DB</a>
                      <a href="index.php?remove=0" class="btn btn-danger">Remove</a>
                    </div>
                  </div>
            </div>
            <div class="middle-card-container">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title" id="personName2"><?php echo $_SESSION['peopleArr'][1]['Name']." ".$_SESSION['peopleArr'][1]['Surname'] ?></h5>
                      <h4>Birthdate: <?php echo $_SESSION['peopleArr'][1]['Birthdate'] ?></h4>
                      <h4>ID: <?php echo $_SESSION['peopleArr'][1]['ID Number'] ?></h4>
                      <a href="index.php?upload=1" class="btn btn-primary">Upload to DB</a>
                      <a href="index.php?remove=1" class="btn btn-danger">Remove</a>
                    </div>
                  </div>
            </div>
            <div class="right-card-container">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title" id="personName3"><?php echo $_SESSION['peopleArr'][2]['Name']." ".$_SESSION['peopleArr'][2]['Surname'] ?></h5>
                      <h4>Birthdate: <?php echo $_SESSION['peopleArr'][2]['Birthdate'] ?></h4>
                      <h4>ID: <?php echo $_SESSION['peopleArr'][2]['ID Number'] ?></h4>
                      <a href="index.php?upload=2" class="btn btn-primary">Upload to DB</a>
                      <a href="index.php?remove=2" class="btn btn-danger">Remove</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="reset-people-btn">
            <form action="index.php" method="post" name="restart-form">
                <button class="btn btn-danger remove-persons-btn" name="restart">Remove all and choose different people</button>
            </form>
        </div>
    </div>
    <script src="js/scripts.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/validation.js"></script>
</body>

</html>