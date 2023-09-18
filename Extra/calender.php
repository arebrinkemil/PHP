<?php
$month = 1;
$year = 2023;
$dateString = "$year-$month-01";

function datum($x)
{
    $array = [];
    $firstDay = date("l", strtotime($x));
    $array[] = $firstDay;
    $daysInMonth = date("t", strtotime($x));
    $array[] = $daysInMonth;
    $currentMonth = date("F", strtotime($x));
    $array[] = $currentMonth;
    return $array;
}

list($firstDay, $monthDays, $monthNow) = datum($dateString);

/*
echo "Month: $monthNow<br>";
echo "Number of days in the month: $monthDays<br>";
echo "The month starts with: $firstDay";*/

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            width: 90%;
            margin: 0 auto;
        }

        ul {
            margin: 0 auto;
        }

        li {
            width: 200px;
            height: 200px;
            border-style: solid;
            border-radius: 10px;
            border-width: 4px;
            display: inline-block;
            margin: 5px;
            padding: 5px;
        }

        h1 {
            font-size: 50px;
            text-align: center;
        }

        h2 {
            font-size: 123px;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        h3 {
            font-size: 31px;
            padding: 10px;
            margin: 0;
        }
    </style>

</head>

<body>
    <div>
        <h1><?php echo $monthNow; ?></h1>
        <h1><?php echo $year; ?></h1>
        <ul>
            <?php
            $WeekDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            $firstDayIndex = array_search($firstDay, $WeekDay);

            for ($i = 1; $i <= $monthDays; $i++) {
                $currentDAY = $WeekDay[($firstDayIndex + $i - 1) % 7]; /* ChatGPT ;) */
                if ($currentDAY == "Saturday" || $currentDAY == "Sunday") {
                    echo "<li style='background-color: red';><h2>$i</h2><h3>$currentDAY</h3></li>";
                } else {
                    echo "<li><h2>$i</h2><h3>$currentDAY</h3></li>";
                }
            }
            ?>
        </ul>
    </div>
</body>

</html>