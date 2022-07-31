<?php 
 require 'db.php';


if(isset($_GET['remove'])){
  $deleteFromProduct=$database->prepare("DELETE from wishlist where ID=:remov");
  $deleteFromProduct->bindParam("remov",$_GET['remove']);
  $deleteFromProduct->execute();
  header("location:wishList.php");
}

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
    <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>  
</head>
  <body>
    <?php include 'header.php';?>
        
    <div class="container pt-5">
        <div class="text-center" style="font-size:75px; color: blue;"><i class="far fa-heart" ></i></div>
        <h1 class="text-center font-weight-bold">My Wishlist</h1>
        
            
      <?php 
      if(isset($_COOKIE['emailfromlogin'])){
          $selectfrom=$database->prepare("SELECT * from wishlist");
          $selectfrom->execute();

          if($selectfrom->rowCount()==0){
            echo '<div style="text-align:center;  " class="d-flex justify-content-center ">
            <div style="width:300px; padding:30px;border-bottom-left-radius: 70px; border-top-right-radius:70px; background-image:linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%);color:white;" >
            The card is empty
            </div>
          </div>';
          }
else{

  echo '<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-center">Image</th>
      <th scope="col">Product name</th>
      <th scope="col">Unit price</th>
      <th scope="col">Stock status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <form method="post">';
          foreach($selectfrom as $wish){
              echo'
            <tr>
              <td style="vertical-align: middle;"><div class="text-center"><img src="image/'.$wish['imageName'].'" class="rounded" alt="..." width="100px" height="100px" style="border: 1px solid black;"></div></td>
              <td style="vertical-align: middle;">Brand'.$wish['brand'].'</td>
              <td style="vertical-align: middle;">'.$wish['price'].'</td>
              <td style="vertical-align: middle;">In Stock</td>
              <td style="vertical-align: middle; text-align: right; width: 30%;">
              <a href="detailsproduct.php?moveImage='.$wish['IDproduct'].'"  class="btn btn-outline-primary mr-3"><i class="fas fa-shopping-cart"></i> Add to cart</a>
              <a class="btn btn-outline-danger" href="wishList.php?remove='.$wish['ID'].'" ><i class="fas fa-trash-alt"></i> Delete</a>
              </td>
            </tr>';

          }
        }
      }
      ?>

                  
                  
</form> 
                </tbody>
              </table>
            

        </div>
        <?php include 'footer.php';?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>