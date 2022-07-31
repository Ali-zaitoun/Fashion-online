<?php 
require '../../db.php';

$selectImage=$database->prepare("SELECT * from getfile Where  categoryCat='Shirts' and personName='Men'");
$selectImage->execute();

if(isset($_GET['remove'])){


    $deletephoto=$database->prepare("SELECT * FROM getfile WHERE ID=:ID ");
    $deletephoto->bindParam("ID",$_GET['remove']);
    
    $deletephoto->execute();
    $deletephot=$deletephoto->fetch(PDO::FETCH_ASSOC);
    $files = [
        '../../image/'.$deletephot['imageName'],
        '../../image/'.$deletephot['image2Name'],
        '../../image/'.$deletephot['image3Name']
    ];
    // echo print_r($files);
    foreach ($files as $file) {
            if (file_exists($file)) {
                
                unlink($file);
            } 
        }

    $deleteUser=$database->prepare("DELETE FROM getfile WHERE ID=:ID");
    $deleteUser->bindParam("ID",$_GET['remove']);
    $deleteUser->execute();
    header("Location: shirts.php");
    

    
    
    

}


    





    
// }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Shirts men</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>
    <style>
      
    </style>
</head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-image:linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%)">
  <a class="navbar-brand text-white" href="#" >Royal Brand</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a class="nav-link text-white" href="../dashbord.php">Dashbord </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="../Users.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="../AddProduct.php">Add product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="../edit and delete Product admin.php">Show && Edit and Delete Product</a>
      </li>

      <div class="dropdown">
  <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false">
    Men
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
  <a class="dropdown-item" href="shirts.php">Shirts</a>
    <a class="dropdown-item" href="pants.php">Pants</a>
    <a class="dropdown-item" href="Accsserios.php">Accesserios</a>
    <a class="dropdown-item" href="shoes.php">Shoes</a>
  </div>
</div>

<div class="dropdown">
  <button class="btn  dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
    Women
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <a class="dropdown-item" href="../women/shirt.php">Shirts</a>
    <a class="dropdown-item" href="../women/pants.php">Pants</a>
    <a class="dropdown-item" href="../women/Accsserios.php">Accesserios</a>
    <a class="dropdown-item" href="../women/shoes.php">Shoes</a>
  </div>
</div>

<div class="dropdown">
  <button class="btn  dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
    Kids
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="../Kids/shirts.php">Shirts</a>
    <a class="dropdown-item" href="../Kids/pants.php">Pants</a>
    <a class="dropdown-item" href="../Kids/Accsserios.php">Accesserios</a>
    <a class="dropdown-item" href="../Kids/shoes.php">Shoes</a>
  </div>
</div>
    </ul>
  </div>
</nav>

  
      
        <div class="container ">
            <div class="row justify-content-center ">

<?php  foreach ($selectImage AS $sql){

     echo '<div class="card col-lg-3 col-md-6 col-sm-12 text-center mt-3 " style="width: 18rem; height:400px;">';
        echo'<img src="../../image/'.$sql['imageName'].'" class="card-img-top " alt="'.$sql["personName"].$sql["imageName"].'" height="190px" width="100%">';
        echo'<div class="card-body " >';
            echo'<h5 class="card-title">Brand '.$sql['brand'].'</h5>';
            echo'<p class="card-text">Price '.'<i class="fas fa-dollar-sign"></i> '.$sql['price'].'</p>';
            echo'<p class="card-text"> '.$sql['categoryCat'].' for '.$sql['personName'].'</p>';
        echo'</div>';
       echo' <form  method="get">';
        echo'<div class="card-body d-flex justify-content-around  mb-5" >';
        echo'<button type="submit" name="remove" value="'.$sql['ID'].'" class="btn btn-danger"><i class="fas fa-trash"></i> Delete</button>';
        echo'<a type="button" class="btn btn-primary text-white"  name="edit"  href="../edit product.php?getId='.$sql['ID'].'"><i class="fas fa-edit"></i> Edit</a>';
        echo'</div>';
        echo'</div>';
        echo'</form>';
}
?>
    

   
    

            
            </div>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>