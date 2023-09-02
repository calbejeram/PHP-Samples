<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>PHP Examples</title>
</head>
<body>
    <h1>
        <?php 
            echo "Hello Universe!";
        ?>
    </h1>

    <?php

        // // require function is mostly used when the external file is mandatory for the application.
        // include "phpVariables.php"; 
        // // include function is used when the file is not required and the applcation should continue to execute process even when that file is not found.
        // include "phpStrings.php"; 
        // include "mathOperations.php";
        // include "dateTime.php";
        // include "array.php";
        // include "arrayFunctions.php";
        include "form.php";

    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>