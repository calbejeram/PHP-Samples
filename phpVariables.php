<?php

    echo "<h2>
            PHP Variables
            </h2>";

    $title = "This is my first PHP";
    echo "<h3> $title </h3>";

    $author = "John Doe";
    $greetings =  "Goodmorning!";

    echo $greetings. " says " .$author; // echo is used to output data to the screen
    /* This is a sample of multiline comments */

    define ("MILESTOKM", 1.6); // to use the constant use defined function

    $kilometer = 5 * MILESTOKM;

    echo "<br/> Miles to Kilometer:  $kilometer";
    print "<h4 style='color: blue;'> Miles to Kilometer: $kilometer</h4>";

    $num1 = 123;
    $num2 = 456;
    $string1 = "Jeram pogi";

    // var dump() is a build in function that allows to dump the info about a variable
    var_dump($num1); 
    var_dump($string1);
    echo "<br/>".$num1 + $num2;

    // Indexed Array
    $colors = array(
        "red", "green", "yellow", "blue"
    );
    echo "<br/> Indexed array: ";
    print_r($colors); // print_r is used for displaying arrays

    // Associative array
    $studentGrade = array(
        "Jeram" => 95,
        "John" => 75,
        "Maria" => 88
    );

    echo "<br/> Associative array: ";
    print_r($studentGrade);

    // Multidimensional Array
    $contactPersons = array(
        array(
            "name" => "Jeram",
            "email" => "jeram@gmail.com",
            "phone" => "0911293432"
        ),
        array(
            "name" => "John",
            "email" => "johndoe@gmail.com",
            "phone" => "0943234234"
        ),
        array(
            "name" => "Smith",
            "email" => "smithwiston@gmail.com",
            "phone" => "0998234234"
        ),
    );
    echo "<br/> Multidimensional array: ";
    print_r($contactPersons);

    echo "<br/>";
    // print_r(
    //     $contactPersons[2]["name"].
    //     $contactPersons[2]["email"].
    //     $contactPersons[2]["phone"]
    // );
    echo "<br/> Name: " . $contactPersons[2]["name"] . 
            "<br/> Email: " . $contactPersons[2]["email"] . 
            "<br/> Phone: " . $contactPersons[2]["phone"];

    echo "<br/><br/>";
    var_dump($colors);
    echo "<br/><br/>";
    var_dump($studentGrade);
    echo "<br/><br/>";
    var_dump($contactPersons);
    
?>