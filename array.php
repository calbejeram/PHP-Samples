<?php
    echo "<h2> Array PHP </h2>";

    /* to sort indexed arrays:
        sort() = ascending
        rsort() = descending

        to sort associative arrays:
         asort() = ascending
         arsort() = descending

        to sort by key names:
         ksort() = ascending
         krsort() = descending

        to sort multidimensional arrays:
         array_multisort(<source_arrays>, <sort_orders>, <sort_flags>)
    */
    echo "<h4> Indexed Array </h4>";
    // Indexed Array
    $colors = array(
        "Red",
        "Green",
        "Blue",
        "Yellow",
        "Violet"
    );

    sort($colors);
    echo "<p> sort() for sorting indexed arrays (ascending): </p>";
    print_r($colors);
    

    rsort($colors);
    echo "<p> rsort() for sorting indexed arrays (descending): </p>";
    print_r($colors);
    
    // Looping through block of elements in an array
    for ($i = 0; $i < count($colors); $i++) {
        echo "<p style='background-color: $colors[$i]'> $colors[$i] </p>";
    };


    $numbers = array(16, 49, 89, 23, 123);

    sort($numbers);
    print_r($numbers);

    echo "<br/>";

    rsort($numbers);
    print_r($numbers);

    echo "<br/><br/>";


    echo "<h4> Associative Array </h4>";

    // Associative array
    $persons = array(
        "John Doe" => 18,
        "Smith Wistom" => 54,
        "Annalyn Moco" => 39,
        "Johnny Ulo" => 13
    );

    asort($persons);
    echo "<p> asort() for sorting associative arrays (ascending): </p>";
    print_r($persons);

    arsort($persons);
    echo "<p> arsort() for sorting associative arrays (descending): </p>";
    print_r($persons);

    foreach ($persons as $person => $age) {
        if ($age < 18) {
            echo "<p> $person cannot vote this upcoming ellection </p>";
        } else {
            echo "<p> $person can vote this upcoming ellection </p>";
        };
    };

    ksort($persons);
    echo "<p> ksort() for sorting associative arrays by key names (ascending): </p>";
    print_r($persons);

    krsort($persons);
    echo "<p> krsort() for sorting associative arrays by keynames (descending): </p>";
    print_r($persons);


    // Multidimensional Array - array that is more than 1 dimentsion
    $records = [
        [
            "FirstName" => "John",
            "LastName" => "Smith",
            "Email" => "johnsmith@gmail.com"
        ],
        [
            "FirstName" => "Smith",
            "LastName" => "Wiston",
            "Email" => "winston@gmail.com"
        ],
        [
            "FirstName" => "Goku",
            "LastName" => "Sanbeda",
            "Email" => "saluhinmoko@gmail.com"
        ],
        [
            "FirstName" => "Captain",
            "LastName" => "Barbel",
            "Email" => "padilla@gmail.com"
        ]
    ];
    echo "<br/>";

    echo "Original Records. <br/>";
    echo "<pre>";
    print_r($records);
    echo "</pre>";

    $keyCol = array_column($records, "FirstName");
    array_multisort($keyCol, SORT_ASC, $records);


    echo "Sorted Records by First Name <br/>";
    echo "<pre>";
    print_r($records);
    echo "</pre>";
    echo "Iteration of a Multidimensional Array <br/>";

    echo "Count of array records : " . count($records, 1);
    echo "Size of array records : " . sizeof($records);

    echo "<br/>";

    for ($i = 0; $i < count($records); $i++) { // Outer loop is for the row
        echo "<br/>";
        foreach ($records[$i] as $key => $value) { // Inner loop is for the column
            echo "$key : $value <br/>";
        }
    }

    echo "<br/>";

    echo 
    "<table class='table table-dark w-50 table-striped'>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>";
        foreach ($records as $value){
            echo "<tr>";
            foreach($value as $key => $value1){
                echo "<td> $value1 </td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
    echo "</table>";

    // Calculate the area of a square
    $lengths = array(10, 15, 20, 30, 35, 40, 50, 55);
    $calculateArea = array_map(
        function ($length) {
            return $length * $length;
        },
        $lengths
    );

    echo "<span class='fw-bold'> Using array_map(): </span>";
    print_r($calculateArea);

    echo "<br/>";

    foreach ($lengths as $value) {
        if ($value % 2 == 1) {
            echo "$value is a odd number. <br/>";
        }
    };

    echo "<span class='fw-bold'> Using array_filter(): </span>";
    $getOddNumber = array_filter(
        $lengths,
        fn($number) => $number % 2 == 1
    );
    print_r($getOddNumber);
    
    echo "<br/>";

    
    $totalLengths = array_reduce(
        $lengths,
        fn($acc, $current) => $acc + $current
    );

    echo "<span class='fw-bold'> Using array_reduce(): </span>";
    echo $totalLengths;

    // Calculate total items in a shopping cart.
    $carts = array(
        [
            "product" => "Laptop",
            "quantity" => 2,
            "price" => 37499
        ],
        [
            "product" => "Cellhpone",
            "quantity" => 1,
            "price" => 49999
        ],
        [
            "product" => "Headset",
            "quantity" => 3,
            "price" => 19999
        ]
    );

    $totalPrice = array_reduce(
        $carts,
        fn($previous, $current) => $previous + ($current['quantity'] * $current['price'])
    );

    echo "<br/>";
    echo "P" . $totalPrice . ".00";
?>