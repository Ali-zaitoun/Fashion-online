<?php 
require '../db.php';
session_start();
$_SESSION['getemailfromheader']=$_GET['getemail'];

// if(isset($_GET['getemail'])){

  

        // header('location: question.php?getemail= '.$_SESSION["getemailfromheader"].'');
// }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
      <a class="nav-link text-white" href="dashbord.php">Dashbord </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="Users.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="AddProduct.php">Add product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="edit and delete product admin.php">Show && Edit and Delete Product</a>
      </li>
      <!-- <div class="btn-group"> -->

<div class="dropdown">
  <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-expanded="false">
    Men
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
  <a class="dropdown-item" href="men/shirts.php">Shirts</a>
    <a class="dropdown-item" href="men/pants.php">Pants</a>
    <a class="dropdown-item" href="men/Accsserios.php">Accesserios</a>
    <a class="dropdown-item" href="men/shoes.php">Shoes</a>
  </div>
</div>

<div class="dropdown">
  <button class="btn  dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-expanded="false">
    Women
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
  <a class="dropdown-item" href="women/shirt.php">Shirts</a>
    <a class="dropdown-item" href="women/pants.php">Pants</a>
    <a class="dropdown-item" href="women/Accsserios.php">Accesserios</a>
    <a class="dropdown-item" href="women/shoes.php">Shoes</a>
  </div>
</div>

<div class="dropdown">
  <button class="btn  dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
    Kids
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <a class="dropdown-item" href="Kids/shirts.php">Shirts</a>
    <a class="dropdown-item" href="Kids/pants.php">Pants</a>
    <a class="dropdown-item" href="Kids/Accsserios.php">Accesserios</a>
    <a class="dropdown-item" href="Kids/shoes.php">Shoes</a>
  </div>
</div>
    </ul>
  </div>
  
</nav>

  <div class="container">
  <table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Massage</th>
      <th scope="col">Answer</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 
      if(isset($_GET['getemail'])){

        $selectfromcontact=$database->prepare("SELECT * from contactus where email=:email");
        $selectfromcontact->bindParam('email',$_GET['getemail']);
        $selectfromcontact->execute();
        foreach($selectfromcontact as $sql){
            echo'<tr>
            <td>'.$sql['name'].'</td>
            <td>'.$sql['email'].'</td>
            <td>'.$sql['subject'].'</td>
            <td>'.$sql['massage'].'</td>
            <td><form method="post" action="answer.php?ID='.$sql['ID'].'"><input type="text" name="answer" value="'.$sql['answer'].'"></td>
            <td> 
           <button type="submit" >confirm</button></form>
        </td>
          </tr>';
    
        }
    }
      ?>
    
    
  </tbody>
</table>
  </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>