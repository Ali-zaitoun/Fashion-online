<?php
require '../db.php';



?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
    .small-container {
  max-width: 1080px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;
}




.cart-page {
  margin: 90px auto;
}

table {
  width: 100%;
  border-collapse: collapse;
}

.cart-info {
  display: flex;
  flex-wrap: wrap;
}
#hedtable{
  background-image:linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%);
}
th {
  text-align: left;
  padding: 5px;
  color: #ffffff;
  
  font-weight: normal;
}
td {
  padding: 10px 5px;
}

td input {
  width: 40px;
  height: 30px;
  padding: 5px;
}

td a {
  color: #ff523b;
  font-size: 12px;
}

td img {
  width: 80px;
  height: 80px;
  margin-right: 10px;
}

.total-price {
  display: flex;
  justify-content: flex-end;
}

.total-price table {
  border-top: 3px solid blue;
  width: 100%;
  max-width: 400px;
}

td:last-child {
  text-align: right;
}

th:last-child {
  text-align: right;
}




.a{
  border-bottom-left-radius: 20px;
}


</style> 
<script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script> 
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
  <div class="small-container cart-page">

    
          
          <?php 
          if(isset($_GET['getemail'])){
          $getfromCart=$database->prepare("SELECT * from cart WHERE IDLogin=:cookieEmail");
          $getfromCart->bindParam("cookieEmail",$_GET['getemail']);
          $getfromCart->execute();
          // $getfromCart1=$getfromCart->fetchObject();
          

          if($getfromCart->rowCount()==0){
            echo '<div style="text-align:center;  " class="d-flex justify-content-center ">
            <div style="width:300px; padding:30px;border-bottom-left-radius: 70px; border-top-right-radius:70px; background-image:linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%);color:white;" >
            The User didn\'t Add to the Cart
            </div>
          </div>';
          }else {
            echo'
            <table>
              <tr id="hedtable">
                <th>Product</th>
                <th>Size</th>
                <th>Colors</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>';
              $sum=0;
          foreach($getfromCart AS $sql){
            $finalPrice=(double)$sql['productPrice']*$sql['quantity'];
           echo'<tr>
            <td>
              <div class="cart-info">
                <img src="../image/'.$sql['getImage'].'" alt="" />
                <div>
                  <p>'.$sql['productName'].'</p>
                  <small>Price $'.$sql['productPrice'].'</small>
                  <br />
                  
                </div>
              </div>
            </td>
            <td>'.$sql['size'].'</td>
            <td>'.$sql['color'].'</td>
            <td>'.$sql['quantity'].'</td>
            <td>$'.$finalPrice.'</td>
          </tr>';
          $sum+=$finalPrice;

          }

          echo'</table>
      
          <di v class="total-price">
            <table>
              
              <tr>
                <td>Total</td>
                <td>$'.$sum.'</td>
              </tr>
              
            </table>
          </div>
        ';
        }
    }

          ?>
          <!-- <button type="button" class="btn btn-primary"><i class="fas fa-money-check-alt"></i>Check Out</button> -->
      </div>
          
        
      
     
      
      
      


   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   

</body>
</html>