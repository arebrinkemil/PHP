
<?php 
$userName = $_GET["name"];
$intialts = "";
$numberOfVowels = 0;

//kollar om efternamnet slutar på son
$lastThree = substr($userName, -3);
if (str_contains($lastThree, 'son')) {
    echo "$userName does contain son";
} else {
    echo "$userName does NOT contain son";
}

echo '<pre>';
//tar ut initialerna
$words = explode(" ", $userName);
foreach ($words as $w) {
  $intialts .= substr($w, 0, 1);
}


//ränkar antalet vokaler
$wordArray = (str_split($userName));

foreach ($wordArray as $letter) {
    if ($letter == 'a' || $letter == 'e' ||  $letter == 'i' || $letter == 'o' ||  $letter == 'u') {
        $numberOfVowels++;
    }
}

//printar ut resultaten
echo '<pre>';
echo "Dina initialer är: $intialts";
echo '<pre>';
echo ucwords($userName, " ");
echo '<pre>';
echo "Du har $numberOfVowels vokaler i ditt namn";

?>
</body>
</html>
