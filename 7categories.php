
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
</head>
<body>
<div>	

</body>
</html>
<?php 

// Просто отправляет

echo
'
<div>	

		<div class="w-100 text-center">

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
	    </nav>
	    </div>
</div>
			<div style="height: 80vh;justify-content:center;align-items: center;padding: 10px;">
             	  <form action="http://localhost/web/7categories.php" style="height: 80vh;justify-content:center;align-items: center;background-color: ;" class="d-flex form-inline bg-light   my-lg-0" method="post" enctype="multipart/form-data">

	                 <input class="form-control mr-sm-2" type="text" placeholder="Search" name="table" aria-label="Search" required>
	                 <button class="btn btn-outline-success  my-sm-0" href=""  type="submit">Search</button>
	            </form>
	         </div>
'
;


$request = file_get_contents("php://input");
$target_dir="WEB/";




$myfile = fopen("7table.txt", "a") or die("Unable to open file!");
$txt = "{$_POST['table']}\n";

fwrite($myfile, $txt);
fclose($myfile);

 ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>