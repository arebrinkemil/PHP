<?php
$month = 4;
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
        /*$red-pantone: #e63946ff;
        $honeydew: #f1faeeff;
        $non-photo-blue: #a8dadcff;
        $cerulean: #457b9dff;
        $berkeley-blue: #1d3557ff;*/

        body {
            background-color: #457b9dff;
        }

        title {
            color: white;
            font-size: 80px;
            text-align: center;
            display: block;
        }

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
            border-color: #1d3557ff;
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
            color: #1d3557ff;
        }

        h3 {
            font-size: 31px;
            padding: 10px;
            margin: 0;
            color: #1d3557ff;
        }
    </style>

</head>

<body>
    <div>
        <title>
            <?php echo $monthNow; ?>
            <?php echo $year; ?>
        </title>

        <ul>
            <?php
            $WeekDay = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
            $firstDayIndex = array_search($firstDay, $WeekDay);

            for ($i = 1; $i <= $monthDays; $i++) {
                $currentDAY = $WeekDay[($firstDayIndex + $i - 1) % 7]; /* ChatGPT ;) */
                if ($currentDAY == "Saturday" || $currentDAY == "Sunday") {
                    echo "<li style='background-color: #e63946ff';><h2>$i</h2><h3>$currentDAY</h3></li>";
                } else {
                    echo "<li style='background-color: #f1faeeff';><h2>$i</h2><h3>$currentDAY</h3></li>";
                }
            }
            ?>
        </ul>
    </div>
</body>

</html>