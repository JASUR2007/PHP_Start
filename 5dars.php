
<?php

$request = file_get_contents("php://input");
$target_dir="WEB/";
move_uploaded_file($_FILES['img']['tmp_name'],$_FILES['img']['name'] );

echo '

<div class="card" style="width: 18rem;">
 	 <img class="card-img-top" src="'.$_FILES['img']['name'].'" alt="Please search new img">
  	<div class="card-body">
    	<h5 class="card-title">'.$_POST['name'].'</h5>
    	<p  class="card-text"> '.$_POST['text'].'</p>
    	<p  class="card-text"> '.$_POST['money'].'</p>
    	<p  class="card-text"> '.$_POST['category'].'</p>
  	</div>
</div>
		
		';


$myfile = fopen("5dars.txt", "a") or die("Unable to open file!");

$txt = "{$_POST['name']}*{$_POST['text']}*{$_POST['money']}*{$_FILES['img']['name']}*{$_POST['category']}";

fwrite($myfile, $txt);
fclose($myfile);
ob_start();
$new_url = 'http://localhost/web/5dars-2.php';
header('Location: '.$new_url);
ob_end_flush();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>