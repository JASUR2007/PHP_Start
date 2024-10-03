<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
        
    }*/
</style>
</head>
<body>
</body>
</html>
<?php
echo'
    <div class="clas position-absolute w-100 text-center ">
         <div class="     position-absolute w-100 text-center ">
        <nav class="d-flex justify-content-center w-100  navbar navbar-expand-lg navbar-light bg-light navbar-brand">
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
        <div>
             <form action="http://localhost/web/6darssearch.php" class="d-flex form-inline my-2 my-lg-0" method="post" enctype="multipart/form-data">
                 <input class="form-control mr-sm-2" type="search" placeholder="Search" name="sear" aria-label="Search">
                 <button class="btn btn-outline-success my-2 my-sm-0"   type="submit">Search</button>
            </form>
        </div>
    </nav>
    </div>
             <form action="http://localhost/web/6darssearch.php" class="d-flex form-inline my-2 my-lg-0" method="post" enctype="multipart/form-data">
                 <input class="form-control mr-sm-2" type="search" name="sear" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-success my-2 my-sm-0"   type="submit">Search</button>
            </form>
        </div>
    </nav>
    </div>
    </div>';
$lines = file("http://localhost/web/5dars.txt");
$get = $_GET["index"];
    foreach($lines as $app => $line)
    {
        $dat = "#<b>{$app}</b>".htmlspecialchars($line);

    }
    $file_data = array_slice($lines, 0, $get+1);
    $trimmed = file('5dars.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    $file = fopen('5dars.txt', 'r');  
    // $str = fgets($file);
    $explode = explode('*', $file_data[$get]);
    if ($explode[3] == "" || $explode[2] == "" || $explode[1] == "") {

    }
    else{
        echo'
        <div class="main">
                
                <div class="right1 card left" style="">
    <img src="'.$explode[3].'" class="card-img-top"  width="100%" height="340px" alt="<b>this item without img!</b>" >
    <div class="card-body">
    <p class="card-text">'.$explode[0].'</p>
    <p class="card-text">'.$explode[1].'</p>
                </div>
                 </div>
                <div class="right">
                    <p style="font-size: 30px;">"$'.number_format($explode[2], 2, ",", " ").'"</p>
                    <a class="btn btn-outline-secondary" style="width: 200px;">Order</a>
            </div>';

    // echo '  

    // <div class="card " style="width: 18rem; border-radius: 2.25rem;">
    // <img src="'.$explode[3].'" class="card-img-top" alt="">
    // <div class="container">
    // <p class="card-text">'.$explode[0].'</p>
    // <p class="card-text">'.$explode[1].'</p>
    // <p>Price - "$'.number_format($explode[2], 0, ",", ".").'"</p>
    //  </div>
    // </div>
    // ';
}



?>
<style>
    * {
        padding: 0;
        margin: 0;
        font-family: monospace;
        box-sizing: border-box;
    }
    body {
        padding: 100px;
    }
    .main {
        gap:20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .right {
        width: 300px;
        height: 470px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid rgba(0,0,0,0.2);
        border-radius: 10px;
    }
     .right1 {
        width: 300px;
        height: 470px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
    }
  


</style>