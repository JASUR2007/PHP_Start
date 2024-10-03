<?php
    // zaprosni qabul qilib oladi
 	 

    // echo $_POST['search'];    

    // faylni ochib beradi
    // $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");

    // $txt = "\n" . $_POST['search'];
    // fwrite($myfile, $txt);2
    // fclose($myfile);

 echo   "<div class='w-100 ' >
          <nav class='d-flex justify-content-center w-100  navbar navbar-expand-lg navbar-light bg-light'>
            <a class='navbar-brand' href='http://localhost/web/5dars.html'>mahsulot</a>
            <a class='navbar-brand' href='http://localhost/web/5dars-2.php'>Qoshish</a>
    	  </nav>
    	</div>
        <div style='padding:15px;display:flex;justify-content:space-around'> 
                       
                ";

    $file = fopen("5dars.txt", "r");
    while($dars = fgets($file)) {
        $str = strpos($dars, $_GET['name']);
        $arr = explode('*', $dars);
        if ($str === false) {
        }
        else {
            $category = $arr[0]??null;
            if ($category ) {
                    echo   '
                    		<div class=" card" style="border-radius: 2.25rem;width:14rem">  
				    		     <div style="width:100%;height:300px">
				    			     <img src="'.$arr[3].'" class="card-img-top" alt="" style="width:200px;height:200px">
				   		   		</div>
				   				 <div class="container">
								    <p class="card-text">'.$arr[0].'</p>
								    <p class="card-text">'.$arr[1].'</p>
								    <p>Price - "$'.number_format($arr[2], 0, ",", ".").'"</p>
								    <p class="card-text">'.$arr[4].'</p>
				   				 </div>
				   			</div>
				   			 ';
            }
        }
    };

     echo "</div>
        ";
?>	
	<style>
    body{
        margin:0;
        padding:0;
        box-sizing:border;
        gap:10px;
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


</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>