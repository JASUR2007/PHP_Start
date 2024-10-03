<?php
  echo (abs(1.2) . "<br>");
  echo (abs(-1.2) . "<br>");

echo (ceil(1.2) . "<br>");
echo (ceil(9.999) . "<br>");

echo(floor(2.5) . "<br>");
echo(floor(9.9) . "<br>");

echo(round(1.25) . "<br>");
echo(round(1.5) . "<br>");

echo(max(1 , 2 ,15) . "<br>");

echo(min(1,2,15) . "<br>");

echo(pow(3,3) . "<br>");

$numbers = range(1, 5);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

$yes = 'массив';

echo is_array($yes) ? 'Bitta malumot' : 'Ikkita malumot';


$no = ['это строка',"iefwjoifn"];

echo is_array($no) ? 'Bitta malumot' : 'ikkita malumot';

echo "\n";

$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
echo (count($a). "<br>");

$b[0]  = 7;
$b[5]  = 9;
echo (count($b));

$os = array("Windows", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Нашёл Irix";
}
if (in_array("Windows", $os)) {
    echo "Нашёл Windows";
}

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple <br>");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key : $val\n";
}

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key ; $val\n";
}


?>v
