<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>assigment</title>
</head>
<body>


<?php
function decToBinary($num)
{
    $binary = '';
    $integerPart = floor($num);
    $fractionalPart = $num - $integerPart;

    // Convert the integer part to binary
    while ($integerPart > 0) {
        $binary = ($integerPart % 2) . $binary;
        $integerPart = floor($integerPart / 2);
    }

    // Add the decimal point
    $binary .= '.';

    // Convert the fractional part to binary
    $maxPrecision = 16; // Maximum number of digits after the decimal point
    while ($fractionalPart > 0 && strlen($binary) <= $maxPrecision) {
        $fractionalPart *= 2;
        $bit = floor($fractionalPart);
        $binary .= $bit;
        $fractionalPart -= $bit;
    }

    return $binary;
}

function decToOctal($num)
{
    $octal = '';
    $integerPart = floor($num);
    $fractionalPart = $num - $integerPart;

    // Convert the integer part to octal
    while ($integerPart > 0) {
        $octal = ($integerPart % 8) . $octal;
        $integerPart = floor($integerPart / 8);
    }

    // Add the decimal point
    $octal .= '.';

    // Convert the fractional part to octal
    $maxPrecision = 16; // Maximum number of digits after the decimal point
    while ($fractionalPart > 0 && strlen($octal) <= $maxPrecision) {
        $fractionalPart *= 8;
        $digit = floor($fractionalPart);
        $octal .= $digit;
        $fractionalPart -= $digit;
    }

    return $octal;
}

function decToHexadecimal($num)
{
    $hexadecimal = '';
    $integerPart = floor($num);
    $fractionalPart = $num - $integerPart;

    // Convert the integer part to hexadecimal
    while ($integerPart > 0) {
        $digit = $integerPart % 16;
        if ($digit < 10) {
            $hexadecimal = $digit . $hexadecimal;
        } else {
            $hexadecimal = chr(65 + ($digit - 10)) . $hexadecimal;
        }
        $integerPart = floor($integerPart / 16);
    }

    // Add the decimal point
    $hexadecimal .= '.';

    // Convert the fractional part to hexadecimal
    $maxPrecision = 16; // Maximum number of digits after the decimal point
    while ($fractionalPart > 0 && strlen($hexadecimal) <= $maxPrecision) {
        $fractionalPart *= 16;
        $digit = floor($fractionalPart);
        if ($digit < 10) {
            $hexadecimal .= $digit;
        } else {
            $hexadecimal .= chr(65 + ($digit - 10));
        }
        $fractionalPart -= $digit;
    }

    return $hexadecimal;
}

// Example usage
$number = 123.456;
$binary = decToBinary($number);
$octal = decToOctal($number);
$hexadecimal = decToHexadecimal($number);

echo "Decimal: $number\n";
echo "Binary: $binary\n";
echo "Octal: $octal\n";
echo "Hexadecimal: $hexadecimal\n";
?>

<h5>Write PHP program that converts binary positive integer number into decimal, octal, and 
hexadecimal number (do not use built-in functions such sas bindec, binoct, binhex).</h5>

<?php
$binaryNumber = "101011"; // Replace with your binary number

// Function to convert binary to decimal
function binaryToDecimal($binary) {
    $decimal = 0;
    $length = strlen($binary);
    
    for ($i = 0; $i < $length; $i++) {
        $digit = $binary[$length - $i - 1];
        $decimal += $digit * pow(2, $i);
    }
    
    return $decimal;
}

// Function to convert decimal to octal
function decimalToOctal($decimal) {
    $octal = "";
    
    while ($decimal > 0) {
        $remainder = $decimal % 8;
        $octal = $remainder . $octal;
        $decimal = (int)($decimal / 8);
    }
    
    return $octal;
}

// Function to convert decimal to hexadecimal
function decimalToHexadecimal($decimal) {
    $hexadecimal = "";
    $hexDigits = "0123456789ABCDEF";
    
    while ($decimal > 0) {
        $remainder = $decimal % 16;
        $hexadecimal = $hexDigits[$remainder] . $hexadecimal;
        $decimal = (int)($decimal / 16);
    }
    
    return $hexadecimal;
}

// Convert binary to decimal
$decimalNumber = binaryToDecimal($binaryNumber);
echo "Decimal: " . $decimalNumber . "\n";

// Convert decimal to octal
$octalNumber = decimalToOctal($decimalNumber);
echo "Octal: " . $octalNumber . "\n";

// Convert decimal to hexadecimal
$hexadecimalNumber = decimalToHexadecimal($decimalNumber);
echo "Hexadecimal: " . $hexadecimalNumber . "\n";
?>
<h4>declares an array of one dimension, initialize it to the following values:
(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9 Print all elements of the array</h4>

<?php
// Declare and initialize the array
$array = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

// Print all elements of the array
$total = 0;
foreach ($array as $element) {
    $total += $element;
    echo $element . " ";
}
?>
<h4>Calculate and print total of all elements</h4>
<?php

echo "Total: " . $total;

?>

<h4>Calculate and print total of even elements</h4>

<?php

$totalEven = 0;
foreach ($array as $element) {
    if ($element % 2 === 0) {
        $totalEven += $element;
    }
}
echo "Total of even elements: " . $totalEven;
?>
<h4>Calculate and print total of odd elements</h4>
<?php
$totalOdd = 0;
foreach ($array as $element) {
    if ($element % 2 !== 0) {
        $totalOdd += $element;
    }
}


echo "Total of odd elements: " . $totalOdd;
?>

<h4>Find minimum element and its positions</h4>

<?php

$minValue = $array[0];
$minPositions = [];

foreach ($array as $index => $element) {
    if ($element < $minValue) {
        $minValue = $element;
        $minPositions = [$index];
    } elseif ($element === $minValue) {
        $minPositions[] = $index;
    }
}

echo "Minimum element: " . $minValue . "\n";
echo "Positions: " . implode(", ", $minPositions);
?>

<h4>Find maximum element and its positions
</h4>

<?php
$maxValue = $array[0];
$maxPositions = [];

foreach ($array as $index => $element) {
    if ($element > $maxValue) {
        $maxValue = $element;
        $maxPositions = [$index];
    } elseif ($element === $maxValue) {
        $maxPositions[] = $index;
    }
}
echo "Maximum element: " . $maxValue . "\n";
echo "Positions: " . implode(", ", $maxPositions);
?>

<h4>Write PHP program that declares an array of two dimensions (square array, where number of 
rows is equal number of columns). Use the table shown to format the output.
1) Declare the array and initialize it with the following values:
Row1 {2, -6, 8}
Row2 {-6, 1, 6}
Row3 {7, 8, -6}</h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Get the number of rows and columns
$rows = count($array);
$columns = count($array[0]);

// Print the array in a table format
echo "<table border='1'>";

// Iterate over each row
for ($i = 0; $i < $rows; $i++) {
    echo "<tr>";

    // Iterate over each column
    for ($j = 0; $j < $columns; $j++) {
        echo "<td>" . $array[$i][$j] . "</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
<h4>Print all elements of the array</h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Print all elements of the array
foreach ($array as $row) {
    foreach ($row as $element) {
        echo $element . " ";
    }
}

?>

<h4>Calculate and print total of odd elements </h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Calculate the total of odd elements
$totalOdd = 0;
foreach ($array as $row) {
    foreach ($row as $element) {
        if ($element % 2 !== 0) {
            $totalOdd += $element;
        }
    }
}

// Print the total of odd elements
echo "Total of odd elements: " . $totalOdd;
?>

<h4>Calculate and print total of even elements</h4>

<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Calculate the total of even elements
$totalEven = 0;
foreach ($array as $row) {
    foreach ($row as $element) {
        if ($element % 2 === 0) {
            $totalEven += $element;
        }
    }
}

// Print the total of even elements
echo "Total of even elements: " . $totalEven;
?>
<h4>Calculate and print total of each row</h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Calculate and print the total of each row
foreach ($array as $row) {
    $rowTotal = 0;
    foreach ($row as $element) {
        $rowTotal += $element;
    }
    echo "Total of row: " . $rowTotal . PHP_EOL;
}
?>
<h4>Calculate and print total of each column</h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Transpose the array
$transposeArray = array_map(null, ...$array);

// Calculate and print the total of each column
foreach ($transposeArray as $column) {
    $columnTotal = array_sum($column);
    echo "Total of column: " . $columnTotal . PHP_EOL;
}
?>
<h4>Calculate and print total of each diagonal</h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Calculate and print the total of the main diagonal
$mainDiagonalTotal = 0;
for ($i = 0; $i < count($array); $i++) {
    $mainDiagonalTotal += $array[$i][$i];
}
echo "Total of main diagonal: " . $mainDiagonalTotal . PHP_EOL;

// Calculate and print the total of the secondary diagonal
$secondaryDiagonalTotal = 0;
for ($i = 0; $i < count($array); $i++) {
    $secondaryDiagonalTotal += $array[$i][count($array) - 1 - $i];
}
echo "Total of secondary diagonal: " . $secondaryDiagonalTotal . PHP_EOL;
?>
<h4>Calculate and print and total of all elements</h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Calculate and print the total of all elements
$total = 0;
foreach ($array as $row) {
    foreach ($row as $element) {
        $total += $element;
    }
}

echo "Total of all elements: " . $total . PHP_EOL;
?>
<h4>Find minimum element and its positions</h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Find the minimum element and its positions
$minValue = PHP_INT_MAX;
$minRow = 0;
$minColumn = 0;

foreach ($array as $rowIndex => $row) {
    foreach ($row as $columnIndex => $element) {
        if ($element < $minValue) {
            $minValue = $element;
            $minRow = $rowIndex;
            $minColumn = $columnIndex;
        }
    }
}

echo "Minimum element: " . $minValue . PHP_EOL;
echo "Position: Row " . ($minRow + 1) . ", Column " . ($minColumn + 1) . PHP_EOL;
?>

<h4>Find maximum element and its positions</h4>
<?php
// Declare and initialize the two-dimensional array
$array = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// Find the maximum element and its positions
$maxValue = PHP_INT_MIN;
$maxRow = 0;
$maxColumn = 0;

foreach ($array as $rowIndex => $row) {
    foreach ($row as $columnIndex => $element) {
        if ($element > $maxValue) {
            $maxValue = $element;
            $maxRow = $rowIndex;
            $maxColumn = $columnIndex;
        }
    }
}

echo "Maximum element: " . $maxValue . PHP_EOL;
echo "Position: Row " . ($maxRow + 1) . ", Column " . ($maxColumn + 1) . PHP_EOL;
?>




Amran Daahir abdulle  C119455

</body>
</html>






























































































































































































