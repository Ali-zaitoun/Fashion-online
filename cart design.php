<?php
 require 'db.php';

if(isset($_GET['cart'])){
$getToAddCart=$database->prepare("SELECT * from getfile where ID=:cart");
      $getToAddCart->bindParam("cart",$_GET['cart']);
      $getToAddCart->execute();
      $getToAddCart1=$getToAddCart->fetchObject();

      // echo $getToAddCart1->ID;
      // echo $getToAddCart1->price;
      // echo $getToAddCart1->brand;
      // $getToAddCart1->imageName;


      
      $addtocart=$database->prepare("INSERT INTO cart(getfileID,productName,productPrice,getImage) values(:getfileID,:productName,:productPrice,:nameImage)");
      $addtocart->bindParam("getfileID",$getToAddCart1->ID);
      $addtocart->bindParam("productName",$getToAddCart1->brand);
      $addtocart->bindParam("productPrice",$getToAddCart1->price);
      $addtocart->bindParam("nameImage",$getToAddCart1->imageName);
      $addtocart->execute();
      

}
if(isset($_GET['remove'])){
  $deleteFromProduct=$database->prepare("DELETE from cart where ID=:remov");
  $deleteFromProduct->bindParam("remov",$_GET['remove']);
  $deleteFromProduct->execute();
  header("location:cart design.php");
}


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Cart</title>
    
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
<link rel="stylesheet" href="style.css">
<script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script> 
</head>
  <body>
    <?php include 'header.php';?>

  <div class="small-container cart-page">

    
          
          <?php 
          $getfromCart=$database->prepare("SELECT * from cart WHERE IDLogin=:cookieEmail and checkout=''");
          $getfromCart->bindParam("cookieEmail",$_COOKIE['emailfromlogin']);
          $getfromCart->execute();
          // $getfromCart1=$getfromCart->fetchObject();
          

          if($getfromCart->rowCount()==0){
            echo '<div style="text-align:center;  " class="d-flex justify-content-center ">
            <div style="width:300px; padding:30px;border-bottom-left-radius: 70px; border-top-right-radius:70px; background-image:linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%);color:white;" >
            The card is empty
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
                <img src="image/'.$sql['getImage'].'" alt="" />
                <div>
                  <p>'.$sql['productName'].'</p>
                  <small>Price $'.$sql['productPrice'].'</small>
                  <br />
                  <a href="cart design.php?remove='.$sql['ID'].'">Remove</a>
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
              <tr >
              <td></td>
          <td ><a href="checkout.php" class="btn btn-outline-primary"><i class="fas fa-money-check-alt"></i> Check Out</a></td>
                
              </tr>
            </table>
          </div>
        ';
        }

          ?>
      </div>
          
      
     
      
      <?php include 'footer.php';?>
      


   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   

</body>
</html>