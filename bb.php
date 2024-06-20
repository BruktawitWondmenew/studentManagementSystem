<?php
// $colors = array("Red", "Green", "Blue","black");
// var_dump($colors);
// echo "<br>";
 
// $color_codes = array(
//     "Red" => 1,
//     "2" => "#00ff00",
//     "Blue" => "#0000ff",
//     5
// );
// var_dump($color_codes);

$my_str = 'Welcome to Bahir Dar';
 
// Outputs: 28
echo strlen($my_str);
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Display replaced string
echo str_replace("o", "truth", $my_str);

$x = 25;
$y = 35;
$z = "25";
var_dump($x === $z);  // Outputs: boolean true
var_dump($x <= $z); // Outputs: boolean false

$year = 2014;
// Leap years are divisible by 400 or by 4 but not 100
if(($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))){
    echo "$year is a leap year.";
} else{
    echo "$year is not a leap year.";
}
// $d = date("D");
// if($d == "Mon"){
//     echo "Have a nice weekend!";
// }


$today = date("D");
switch($today){
    case "Mon":
        echo "Today is Monday. Clean your house.";
        break;
    case "Tue":
        echo "Today is Tuesday. Buy some food.";
        break;
    case "Wed":
        echo "Today is Wednesday. Visit a doctor.";
        break;
    case "Thu":
        echo "Today is Thursday. Repair your car.";
        break;
    case "Fri":
        echo "Today is Friday. Party tonight.";
        break;
    case "Sat":
        echo "Today is Saturday. Its movie time.";
        break;
    case "Sun":
        echo "Today is Sunday. Do some rest.";
        break;
    default:
        echo "No information available for that day.";
        break;
}


?>
