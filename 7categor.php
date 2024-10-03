<?php 

// Просто отправляет

echo'

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
';

$myfile = fopen("7table.txt", "r") or die("Unable to open file!");

$a=1;
echo '<table class="table table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
    </tr>
    </thead>';

while($txt = fgets($myfile)){
    $item=explode(" ",$txt);
    if ($item[0]=="") {

    }
    else{
    echo '
    
    <tbody>
    <tr>
        <th scope="row">'.$a.'</th>
        <td>'.$item[0].'</td>
    </tr>
    </tbody>
    ';
}
    $a++;
};

echo '</table>'
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>