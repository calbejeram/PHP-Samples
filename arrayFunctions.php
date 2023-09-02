<?php
    echo "<h2> PHP built-in functions for arrays</h2>";
    echo "<h4> Using array_unshift, shift, push, pop and splice</h4>";

    // Array_unshift() to add one or more elements to an array

    $actions = array(
        "edit",
        "delete",
        "view"
    );

    array_unshift($actions, "new", "approved");
    echo "<p>array_unshift() function to add one or more elements to an array:</p>";
    print_r($actions);

    $arrColors = array(
        "red" => "#FF000",
        "green" => "#00FF",
        "yellow" => "#FFF00",
        "blue" => "#000FF"
    );
    // array_unshift($arrColors, ["black" => "#00000"]);
    echo "<br>";
    print_r($arrColors);

    $arrColors = ["black" => "#00000"] + $arrColors;
    echo "<pre>";
    print_r($arrColors);
    echo "</pre>";

     // array_shift() to remove/delete the first item in an array
     array_shift($actions);
     // array_push pushes or add one or more element at the end of an array
     array_push($actions);
     // array_pop() popping off the last element at the end of an array
     array_pop($actions);
    // array_splice(param1, param2) - first param is the variable array, second param will specify where to start removin the elements, third param is the length that will specify the number of elements to be deleted, fourth param is an array that will be inserted into the original array.
    $arrColors2 = array(
        "purple" => "#808088",
        "orange" => "#FFA500"
    );

    array_splice($arrColors, 0, 1, $arrColors2);
    echo "<pre>";
    echo "<br>array_splice() function<br/>";
    print_r($arrColors);
    echo "</pre>";

    echo "<br>";

    $arr1 = array(
        "task" => "practice coding",
        2,
        5,
        10
    );

    $arr2 = array(
        "jeram" => "calbe",
        22,
        "interest" => "coding"
    );

    $result = array_merge($arr1, $arr2);
    echo "<pre>";
    print_r($result);
    echo "</pre>";

    // array_merge() function merge one or more arrays together
    array_merge();

    // array_sum() function returns the sum of the numbers in the array

    $arrNum = array(3, 9, 27, 82, 299);
    echo "<p>Total using array_sum(): " . array_sum($arrNum);
?>