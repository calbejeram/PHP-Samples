<?php

    echo "<h2>Date and Time Functions</h2>";
    // to create a date = date();
    // M = Month in text (Three Letters)
    // F = Month in text (Complete)
    // m = Month in numbers with leading zeroes
    // D = Date of the month in text (Three Letters)
    // d = date of the month with leading zeroes
    // Y = year in 4 digits (y = Year in 2 digits)
    // y = year in 2 digits

    // l = Day today in text (Three letters)
    // j = Date today in digits (without leading zeroes)
    // S = Ordinal suffix of date (e.g. th, 1st, 2nd, 3rd)

    // H = Hour in 24-hour format
    // h = hour in 12-hour format
    // i = minutes
    // s = seconds
    // a = am/pm
    // A = AM/PM

    // to set the default timezone
    $timezone = date_default_timezone_set("Asia/Manila");

    $date = date("d-m-Y");
    $dateToday = date("l");
    $time = time();

    echo "<p> Date today in (dd/mm/yyyy) format: " . "<span class='text-danger fw-bold'>" . $date . "</span></p>";

    echo "<p> The day today is: " . "<span class='text-danger fw-bold'>" . $dateToday . "</span></p>";

    echo "<p> The day today is: " . "<span class='text-danger fw-bold'>" . date("h:i:s A") . "</span></p>";

    echo "<p> The time today is: " . "<span class='text-danger fw-bold'>" . $time . "</span></p>";

    echo "<p>" . date("l") . ", " . date("j") . "th of " . date("F") . date(" Y") . " , " . date("h:i:s A") . "</p>";

    // One liner date display
    echo "<p>" . date("l, jS \of F Y, h:i:s A") . "</p>";


    function determine($date){
        if ($date === "Saturday" || $date === "Sunday"){
            echo "<p>" . "The date is Weekend" . "</p>";
        } else {
            echo "<p>" . "The date is Weekdays" . "</p>";
        }
    }

    determine(date("l"));
?>