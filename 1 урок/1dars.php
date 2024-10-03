<?php



 echo 'Привет, мир<br>'; 

  function bar()                                    
  {
    $card = 1*2;
    echo "$card <br>";

    echo $card[1]." ".$card[2]." ".$card[3].'<br>';

    $obj = ['name' => 'Anvar','yosh' => '35'];
    $sds = ['ee'];
    echo $obj["name"].':';
    echo $obj["yosh"];


  }


bar();
  function foo(){
  $mar = ["yanvar","fevral",'1','1','1'];
  $maeeee = [];
  echo "bugun"." ".date('d')."-".$mar[0]."<br>";
}
foo();
function number() {
 $sum = [1, 2, 3, 4, 5];
   $max=0;
  foreach ($sum as $n) {
     $max+= $n;
  }
    echo $max;
}

number();







