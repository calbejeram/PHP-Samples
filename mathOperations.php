<?php
    echo "<h2>
        PHP Math Operations
    </h2>";

    function add($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;
    };

    echo add(10, 15);

    echo "<br/><br/>";

    function calculator($num1, $num2, $operator){
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                $result = $num1 / $num2;
                break;
        }

        return $result;
    };

    echo "<p>The Sum of 10 + 15 is : " . "<span class='text-danger fw-bold'> " . calculator(10, 15, '+') . "</span></p>";
    echo "<p>The Difference of 10 - 15 is : " . "<span class='text-danger fw-bold'> " . calculator(10, 15, '-') . "</span></p>";
    echo "<p>The Product of 10 * 15 is : " . "<span class='text-danger fw-bold'> " . calculator(10, 15, '*') . "</span></p>";
    echo "<p>The Quotient of 10 / 15 is : " . "<span class='text-danger fw-bold'> " . calculator(10, 15, '/') . "</span></p>";
    
    echo "<br/>";
    echo "rand() function: " . rand(1, 1000) . " // returns a random number between 1 to 1000";

    echo "<br/>";
    echo "sqrt() function: " . sqrt(9) . " // returns the square root of the number";

    echo "<br/>";
    echo "ceil() function: " . ceil(10.4) . " // returns the ceil value of the number";

    echo "<br/>";
    echo "floor() function: " . floor(10.4) . " // returns the floor value of the number";
    echo "<br/>";
    echo "abs() function: " . abs(21) . " // returns the absolute value of a number";

    echo "<br/>";
    echo "is_nan() function: " . is_nan(10) . " // returns true if the number is a number";

    echo "<br/>";
    echo "decbin() function: " . decbin(10) . " // returns the binary value of a number";
    // 256 128 64 32 16 8 4 2 1
    //   0   0  0  0  0 1 0 1 0

?>