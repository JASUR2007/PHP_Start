<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php




    echo '
    <div class="clas position-absolute w-100 text-center " >
         <div class="     position-absolute w-100 text-center "  >
        <nav class="d-flex justify-content-center w-100  navbar navbar-expand-lg navbar-light bg-light navbar-brand" >
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
    </div>'
    ;
    $a=1;
    echo '    <div class="container-fluid d-flex justify-content-center vh-100 align-items-center" style="height:100vh">
        <form style="width:600px;background-color:#9a839538;height:400px;border-radius:10px"  action="http://localhost/WEB/5dars.php" method="post"  enctype="multipart/form-data" class=" gap-3 d-flex  align-items-center justify-content-center">
            <div style="width:500px;display:flex;flex-direction:column;
                justify-content:space-around;height:300px">
                <input type="text" placeholder="ISM" name="name" class="form-control  text-center" >
                <input type="text" placeholder="text"  class="form-control  text-center" name="text" >
                <input type="number" placeholder="price"  class="form-control  text-center" name="money" >
           <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="category">
        <option selected>Category</option>


'; 
        $myfile = fopen("7table.txt", "r");
        while($txt = fgets($myfile)){
          echo '
          <option value="'.$txt.'" name="category">'.$txt.'</option>
          ';
      
          $a++;
      };
    
    echo '
    </select>
                <input type="file" class="btn btn-primary form-control" name="img" required>
       <button type="submit" class="btn bg-primary">Submit</button>
    </form>
    </div>';
























?>