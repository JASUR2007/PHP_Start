<?php


function weaher(){
$json_url = "https://api.openweathermap.org/data/2.5/weather?q=Namangan&appid=a6f40c3e67411b24bacbb9ff6fe376d6";
$json = file_get_contents($json_url);
$data = json_decode($json, TRUE);
 $desc = $data['weather'][0]["description"];
 $name = $data['name'];
 $UZ = $data['sys']["country"];
 $temp = $data['main']["temp"];


echo "<pre>";
 print_r($UZ) ;
echo "</pre>";
echo "<pre>";
 print_r($name) ;
echo "</pre>";
echo "<pre>";
 print_r($temp) ;
echo "</pre>";
echo "<pre>";
 print_r($desc) ;
echo "</pre>";
}
weaher();
function valuta(){
$json_url1 = "https://cbu.uz/oz/arkhiv-kursov-valyut/json/USD/2022-01-01";
$json2 = file_get_contents($json_url1);
$data = json_decode($json2, TRUE);
 $nam = $data[0]["CcyNm_EN"];
 $rate = $data[0]["Rate"];
 $date = $data[0]["Date"];
echo "<br>";
echo "<pre>";   
 print_r($nam) ;
echo "</pre>";
echo "<pre>";   
 print_r($rate ) ;
echo "</pre>";
echo "<pre>";   
 print_r($date) ;
echo "</pre>";
}
valuta();
 ?>