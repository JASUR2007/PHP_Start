<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<style>
    body{
        margin:0;
        padding:0;
        box-sizing:border;
        display:flex;
        gap:10px;
        align-items:center;
        flex-wrap:wrap;
      
    }
    .card {
    	top: 12vh; bottom: 0; left: 0; right: 0;
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
top: 0; bottom: 0; left: 0; right: 0;
	}
	.clas nav{
		display:flex ;
		justify-content:center;
		text-align:center;
		width: 100%;
		
	}
    *{
        
        text-decoration:none;
    }
</style>
</head>
<body>
</body>
</html>
<?php 
$myfile = fopen("5dars.txt",'r');
echo'
<div class="clas w-100 text-center ">
    <div class=" w-100 text-center ">
        <nav class="d-flex  w-100  navbar navbar-expand-lg navbar-light bg-light navbar-brand">
            <div class="dropdown show" style="color:black">
                <a style="color:black" class="btn navbar-brand dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Items
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="http://localhost/web/5darscat.php">ADD</a>
                    <a class="dropdown-item" href="http://localhost/web/5dars-2.php">item</a>
                </div>
            </div>
            <div class="dropdown show" style="color:black">
                <a style="color:black" class="btn navbar-brand dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="http://localhost/WEB/7categories.php">ADDcategories</a>
                    <a class="dropdown-item" href="http://localhost/web/7categor.php">TOTAL</a>
                </div>
            </div>
             <form action="http://localhost/web/6darssearch.php" class="d-flex form-inline my-2 my-lg-0" method="post" enctype="multipart/form-data">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" name="sear" aria-label="Search">
                 <button class="btn btn-outline-success my-2 my-sm-0"   type="submit">Search</button>
            </form>
        </div>
        </nav>
    </div>
    </div>';
    
echo'<div class="w3-sidebar w3-bar-block" style="width:25%">
                ';
                $file = fopen('7table.txt' , 'r');
                while($categor = fgets($file)){
                        echo "<div>
                        <a class='text' href='7categname.php?name=$categor'>
                            <li name='category'>$categor</li>
                        </a>

                    </div>

                    ";
                }
                
               
                echo '</div> ';';

</div> </div></nav><div class="" style="   ">
            <h1>Categories:</h1>
            <nav>
            

   

    ';
$a = 0;

while($txt = fgets($myfile)){
	$item=explode("*",$txt);
    if ($item[0] === '' || $item[1] === '' || $item[2] === '' || $item[3] === '' ) {

    }
    else{
    echo '
    <div class="card " style="width: 18rem; border-radius: 2.25rem;padding-bottom:30px">
    <div style="width:100%;height:300px">
    	<img src="'.$item[3].'" class="card-img-top" alt="" style="width:100%;height:100%">
    </div>
    <div class="container">
    <p class="card-text">'.$item[0].'</p>
    <p class="card-text">'.$item[1].'</p>
    <p>Price - "$'.number_format($item[2], 0, ",", ".").'"</p>
    <p class="card-text">'.$item[4].'</p>
     <a href="http://localhost/web/8darsfororder.php?index='.$a.'" class="btn btn-primary" stlye="padding:10px">More</a>
     <a href="="btn btn-primary" stlye="padding:10px">More</a>
    </div>

    </div>';
    };



    $a++;
};

fclose($myfile);
?>