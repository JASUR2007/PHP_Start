<?php 
function arr(){
	$cart = array();
	array_unshift($cart, 13, 14,2,2,2,3,5);
	unset($cart[1]);
	echo "<br>"; 
	print_r ($cart);
}
function cars(){
	$car = array("mers","malibu","nexia");
	$key = array_search('mers', $car);
	unset($car[$key]);
	$car[1] = "damas"; 
	print_r( $car);


}
function obj(){
	$kartoshka = ["name" => "Abdulaziz"];
	$free['surname']='Hsuin';
	print_r($free);
	echo "<br>" ;
		

}
function name(){
	$item = "Jack Jason rapid";
	$items = explode(" ",$item);
	print_r($items[0]."<br>".$items[1]."<br>".$items[2]);		
	echo "<br>" ;

}
function ph(){
// $url = "https://api.openweathermap.org/data/2.5/weather?q=Namangan&appid=a6f40c3e67411b24bacbb9ff6fe376d6";
// $contents = file_get_contents($url);
// echo $contents; 

}
ph();
name();
obj();
cars();
arr()
 ?>
 