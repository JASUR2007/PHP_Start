<?php
    // zaprosni qabul qilib oladi
 	 

    // echo $_POST['search'];    

    // faylni ochib beradi
    // $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

    // $txt = "\n" . $_POST['search'];
    // fwrite($myfile, $txt);2
    // fclose($myfile);



    $file = fopen("5dars.txt", "r");
    while($dars = fgets($file)) {
        $str = strpos($dars, $_POST['sear']);
        $arr = explode('*', $dars);
        if ($str === false) {
        }
        else {
            $name = $arr[0]??null;
            $text = $arr[1]??null;
            $img = $arr[3]??null;
            $price = $arr[2]??null;
            if ($name && $text && $img && $price) {
                echo "
                	
    <div class='clas position-absolute w-100 text-center '>
        <nav class='d-flex justify-content-center w-100  navbar navbar-expand-lg navbar-light bg-light'>
            <a class='navbar-brand' href='http://localhost/web/5dars.html'>mahsulot</a>
            <a class='navbar-brand' href='http://localhost/web/5dars-2.php'>Qoshish</a>
    </div>
        	<div>
                <div  class='card ' style='width: 18rem; border-radius: 2.25rem;'>
                    <img class='card-img-top' src='".$img."'>
                    <div class='container'>
                        <h1 class='card-text'>'".$name."'</h1><br>
                        <p class='card-text'>Text - '".$text."'</p><br>
                        <span>Price - '$".$price."'</span>
                    </div>
                </div>
                </div>
                ";
            }
        }
    };
?>	
	<style>
    body{
        margin:0;
        padding:0;
        box-sizing:border;
        display:flex;
        justify-content:center;
        gap:10px;
        align-items:center;
        flex-wrap:wrap;
      
    }
    .card {
    	top: 0vh; bottom: 0; left: 0; right: 0;
  		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  		transition: 0.3s;
 		 border-radius: 5px; /* 5px rounded corners */
	}
	.card:hover {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
	}

	/* Add some padding inside the card container */
	.container {
	padding: 2px 16px;
	}
	.clas{

		text-align:center;
		width: 100%;
		position: absolute;
top: 0; bottom: 0; left: 0; right: 0;
	}
	.clas nav{
		display:flex ;
		justify-content:center;
		text-align:center;
		width: 100%;
		
	}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>