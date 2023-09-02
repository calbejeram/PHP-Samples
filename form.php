<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>PHP Forms</title>
</head>
<body>
    <div class="container w-50">
        <h2>Subscribe to our newsletter</h2>


        <?php

            $fNameError = $lNameError = $emailError = $commentsError = '';
            $fIdFirstName = $fIdLastName = $fIdEmail = $fIdGender = $fIdComments = '';


            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                if (empty($_POST['firstName'])) {
                    $fNameError = "This field is required!";
                } else {
                    $fIdFirstName = usersInput($_POST['firstName']);
                };

                if (empty($_POST['lastName'])) {
                    $lNameError = "This field is required!";
                } else {
                    $fIdLastName = usersInput($_POST['lastName']);
                };

                if (empty($_POST['email'])) {
                    $emailError = "This field is required!";
                } else {
                    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $fIdEmail = usersInput($_POST['email']);
                    } else {
                        $emailError = "Incorrect email format!";
                    };
                };

                $fIdGender = $_POST['gender'];

                $fIdComments = usersInput($_POST['comments']);
            };

            // Form field sanitation
            function usersInput($data) {
                $data = trim($data); // removes whitespaces and other predefined characters from both sides of the string
                $data = htmlentities($data);
                $data = stripslashes($data); // removes input with slashes and backslashes from both sides of the string

                return $data;
            };

        ?>


        <form action=
        <?php
        echo htmlspecialchars($_SERVER["PHP_SELF"])
         ?> method="POST">
            <fieldset>
                <div class="mb-3">
                    <label for="firstName" class="form-label">First Name: <span class="text-danger">*</span></label>
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="e.g. Juan" required>
                    <span class="text-danger">
                    <?php 
                        if ($fNameError) {
                            echo $fNameError;
                        }
                    ?>
                    </span>
                </div>

                <div class="mb-3">
                    <label for="lastName" class="form-label">Last Name: <span class="text-danger">*</span></label>
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="e.g. Dela Cruz" required>
                    <span class="text-danger">
                    <?php 
                        if ($lNameError) {
                            echo $lNameError;
                        }
                    ?>
                    </span>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email: <span class="text-danger">*</span></label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="e.g. sample@email.com" required>
                    <span class="text-danger">
                    <?php 
                        if ($emailError) {
                            echo $emailError;
                        }
                    ?>
                    </span>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Gender:</label>
                    <div>
                        <input type="radio" id="gender" name="gender" value="Male" class="form-check-input me-2">Male
                        <input type="radio" id="gender" name="gender" value="Female" class="form-check-input me-2">Female
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="comments" class="form-label">Comments: <span class="text-danger">*</span></label>
                    <textarea name="comments" id="comments" cols="30" rows="3" placeholder="Type your comments here..." class="form-control" required></textarea>
                    <span class="text-danger">
                    <?php 
                        if ($commentsError) {
                            echo $commentsError;
                        }
                    ?>
                    </span>
                </div>

                <button class="btn btn-outline-primary" type="submit">Subscribe</button>

                <?php
                    echo "<p>" . "First Name: " . $fIdFirstName . "</p>";
                    echo "<p>" . "Last Name: " . $fIdLastName . "</p>";
                    echo "<p>" . "Email: " . $fIdEmail . "</p>";
                    echo "<p>" . "Gender: " . $fIdGender . "</p>";
                    echo "<p>" . "Comments: " . $fIdComments . "</p>";
                    
                ?>
            </fieldset>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>