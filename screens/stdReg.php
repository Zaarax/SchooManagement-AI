<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>School Management</title>
    <style>
        body {
            /* background-image: url("Assets/images/backgroundofAddfrom.jpg");
            background-position: center;
            background-size: cover; */
            background: #111;
            color: #f9f9f9;
        }
    </style>
</head>

<body>
    <?php

    // require_once "init.php";
    // if (input::exists()) {
    //     if (input::get("submit")) {
    //         $imagePath = "Assets/images/";
    //         $image = $_FILES['sImage']['name'];
    //         $tmpImage = $_FILES['sImage']['tmp_name'];
    //         $image = strtolower(pathinfo($image, PATHINFO_FILENAME)) . '-' . time() . '.' . strtolower(pathinfo($image, PATHINFO_EXTENSION));
    //         move_uploaded_file($tmpImage, $imagePath . $image);
    //         DBFunction::getInstance()->Insertdata("s_student", array(
    //             'Name' => Input::get("sNAme"),
    //             'FatherNAme' => Input::get('sFnAme'),
    //             'NIN' => Input::get('sNin'),
    //             'Surname' => Input::get('sSurname'),
    //             'Address' => Input::get('sAddress'),
    //             'Email' => Input::get('sEmail'),
    //             'Number' => Input::get('sNumber'),
    //             'ParentNumber' => Input::get('sParentsnumber'),
    //             'Dateofbirth' => Input::get('sDateofBirth'),
    //             'DateofAddmission' => Input::get('sAdddate'),
    //             'LastQualification' => Input::get('sLastqualification'),
    //             'Image' => $image,
    //             'Active' => '1'

    //         ), 1);
    //         $lastID = DBFunction::getInstance()->getInsertID();
    //         // echo Input::get("sNAme");
    //         header("Location: http://localhost/school/guardient.php?stdid=".$lastID);       
    //     }
    // }


    ?>

    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 m-auto pt-5">
            <h1>Student Registration</h1>
            <form method="post" enctype="multipart/form-data">
                <label for="sName">Student Full Name</label>
                <input type="text" class="form-control" id="sNAme" name="sNAme" />

                <label for="sFname">Student Father Name</label>
                <input type="text" class="form-control" id="sFnAme" name="sFnAme" />

                <label for="sNin">National Identification Number</label>
                <input type="text" class="form-control" id="sNin" name="sNin" />

                <label for="sSurname">Student Surname</label>
                <input type="text" class="form-control" id="sSurname" name="sSurname" />

                <label for="sEmail">Student Email</label>
                <input type="email" class="form-control" id="sEmail" name="sEmail" />

                <label for="sAddress">Student Address</label>
                <input type="text" class="form-control" id="sAddress" name="sAddress" />


                <label for="sNumber">Student Number</label>
                <input type="text" class="form-control" id="sNumber" name="sNumber" />

                <label for="sParentsnumber">Parents Number</label>
                <input type="text" class="form-control" id="sParentsnumber" name="sParentsnumber" />

                <label for="sDateofBirth">Student Date of Birth</label>
                <input type="date" class="form-control" id="sDateofBirth" name="sDateofBirth" />

                <label for="sAdddate">Student Addmission Date</label>
                <input type="date" class="form-control" id="sAdddate" name="sAdddate" />

                <label for="sLastqualification">Student Last Qualification</label>
                <input type="text" class="form-control" id="sLastqualification" name="sLastqualification" />

                <label for="sImage">Student Image</label>
                <input type="file" class="form-control pb-4" id="sImage" name="sImage">
                


                <input type="submit" name="submit" class=" btn btn-outline-light mt-4">

            </form>
        </div>
    </div>


</body>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>