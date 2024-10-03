<?php


// Просто отправляет  

 // zaprosni qabul qilib oladi
$request = file_get_contents("php://input");

 // matnni ajratib beradi
parse_str($request, $output);
 echo $output['name']. "<br>";  
 echo $output['text'];

 // faylni ochib beradi
 $myfile = fopen("4dars.txt", "a") or die("Unable to open file!");
 $txt = $output['name'] . "\n";

 // faylga yozadi
 fwrite($myfile, $txt);
 
 $txt = $output['text'] . "\n";
 fwrite($myfile, $txt);
 fclose($myfile);







// Сохраняет данные в файле









 
 // zaprosni qabul qilib oladi
// $request = file_get_contents("php://input");

 // matnni ajratib beradi
// parse_str($request, $output);
//  echo $output['name']. "<br>";  
//  echo $output['text'];

 // faylni ochib beradi
 // $myfile = fopen("4dars.txt", "w") or die("Unable to open file!");
 // $txt = $output['name'] . "\n";

 // faylga yozadi
//  fwrite($myfile, $txt);
 
//  $txt = $output['text'] . "\n";
//  fwrite($myfile, $txt);
//  fclose($myfile);
?>

