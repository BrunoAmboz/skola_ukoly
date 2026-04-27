<?php

echo "<h2> ukol1 </h2>";

for ($i = 1; $i <= 100; $i++){
    echo $i . "<br>";
}




echo "<h2> ukol2 </h2>";

for ($i = 1; $i <= 100; $i++) {

    if ($i <= 50){
        echo $i . "<br>";
    }
    else {
        echo "Hodne" . "<br>";
    }
}



echo "<h2> ukol3 </h2>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}



echo "<h2> ukol4 </h2>";

for ($i = 1; $i <= 100; $i++){
    if ($i % 3 == 0){
        echo $i . "<br>";
    }
}



echo "<h2> ukol5 </h2>";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "BUM PRASK<br>";
    }
    elseif ($i % 3 == 0){
        echo "BUM<br>";
    }
    elseif ($i % 5 == 0) {
        echo "PRASK<br>";
    }
    else {
        echo $i . "<br>";
    }
}



echo "<h2> ukol6 </h2>";

$veci = ["auto", "sesit", "telefon", "dvere", "stul", "pocitac", "zidle", "propiska"];

foreach ($veci as $v){
    echo $v . "<br>";
}



echo "<h2> ukol7 </h2>";

foreach ($veci as $v){
    if(strlen($v) > 5){
        echo strtoupper($v) . "<br>";
    }
    else {
        echo $v . "<br>";
    }
}



echo "<h2> ukol8 </h2>";

$jmeno = "Bruno";
$vek = "17";

echo "Ahoj, jmenuji se " . $jmeno . " a je mi " . $vek . "let.";



echo "<h2> ukol9 </h2>";

$hod = rand(1,6);
echo "Cislo: " . $hod;



echo "<h2> ukol10 </h2>";

$podmet = ["Kocka", "Pes", "Veverka", "Student", "Ucitel"];
$prisudek = ["ji", "vidi", "nese", "uci", "stavi"];
$predmet = ["jablko", "batoh", "list", "sesit", "dům"];

$nahodnyPodmet = $podmet[rand(0, count($podmet)-1)];
$nahodnyPrisudek = $prisudek[rand(0, count($prisudek)-1)];
$nahodnyPredmet = $predmet[rand(0, count($predmet)-1)];

echo $nahodnyPodmet . " " . $nahodnyPrisudek . " " . $nahodnyPredmet . ".";



?>
