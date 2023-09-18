<?php
// Define the month and year you want information for (e.g., September 2023)
$month = 7; // 9 represents September
$year = 2023;
$dateString = "$year-$month-01";

function datum($x)
{
    $array = [];
    $firstDayOfWeek = date("l", strtotime($x));
    $array[] = $firstDayOfWeek;
    $daysInMonth = date("t", strtotime($x));
    $array[] = $daysInMonth;
    $currentMonth = date("F", strtotime($x));
    $array[] = $currentMonth;
    return $array;
}

list($firstDay, $monthDays, $monthNow) = datum($dateString);


echo "Month: $monthNow<br>";
echo "Number of days in the month: $monthDays<br>";
echo "The month starts with: $firstDay";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 1500px;
            margin: 0 auto;
        }

        li {
            width: 200px;
            height: 200px;
            border-style: solid;
            border-radius: 3px;
            display: inline-block;
        }
    </style>

</head>

<body>
    <div>
        <ul>
            <?php
            for ($i = 0; $i < $monthDays; $i++) {
                echo "<li></li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>