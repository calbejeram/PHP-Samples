<?php

    echo "<h2>
        PHP Strings Manipulation
        </h2>";

    $string1 = "The quick brown fox jumped over the lazy dog";
    echo "Using strlen() function: " . strlen($string1) . " characters" . "\n" . "<br/>" .
    "Using str_word_count() function: " . str_word_count($string1) . " words" . "\n" . "<br/>" . 
    "Using str_replace() function: " . str_replace("fox", "cat", $string1) . "\n" . "<br/>" . 
    "Using strrev() function: " . strrev($string1) . "\n" . "<br/>" . 
    "Using strtouper() function: " . strtoupper($string1). "\n" . "<br/>";

    // .= : concatanation assignment
    $str2 = "This is a sample of ";
    $str3 = "a concatanation assignment";

    $str2 .= $str3;
    echo "<br/>" . $str2;

?>