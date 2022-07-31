<?php

require 'db.php';

session_start();

// session_start();
//  if(isset($_GET['moveImage'])){
  //  if($_GET['product']==$_SESSION['getId']){
  //   $sql=$database->prepare("SELECT * FROM getfile where ID=:details");
  //    $sql->bindParam("details",$_GET['moveImage']);
  //  $sql->execute();
  //  $sql=$sql->fetchObject();
    //  $showImage1="data:".$sql->filetypeimage.";base64,".base64_encode($sql->image1);
    //  $showImage2="data:".$sql->filetypeimage.";base64,".base64_encode($sql->image2);
    //  $showImage3="data:".$sql->filetypeimage.";base64,".base64_encode($sql->image3);

    // echo $_GET['product'];
    // echo $_SESSION['getId'];
  //  }
//  }
if(isset($_GET['moveImage'])){
  $sql=$database->prepare("SELECT * FROM getfile where ID=:details");
  $sql->bindParam("details",$_GET['moveImage']);
  $sql->execute();
  $sql1=$sql->fetchObject();
  $showImage1="image/".$sql1->imageName;
  $showImage2="image/".$sql1->image2Name;
  $showImage3="image/".$sql1->image3Name;
}


if(isset($_POST['cartt'])){
  $tocart=$database->prepare("SELECT * FROM getfile where ID=:details");
  $tocart->bindParam("details",$_GET['moveImage']);
  $tocart->execute();
  $tocart=$tocart->fetchObject();


   $cartID=$tocart->ID;
   $cartbrand=$tocart->brand;
   $cartPrice=$tocart->price;
   $cartImage=$tocart->imageName;
   $cartSize=$_POST["size"];
   $cartCatogary=$tocart->categoryCat;
   $cartColor=$_POST["color"];
   $quantity=$_POST["quantity"];

  //  $cartforemail=$_SESSION["getEmailLogin"];
  $cartforemail=$_COOKIE['emailfromlogin'];

  $insertToCart=$database->prepare("INSERT into cart(getfileID, productName, productPrice, getImage, size, category, color, quantity,IDLogin) 
  VALUES(:getfileID, :productName, :productPrice, :getImage, :size, :category, :color, :quantity,:IDLogin)");

$chksize="";  
foreach($cartSize as $chk1size)  
   {  
      $chksize.= $chk1size." ";  
   }

   $chkcolor="";  
foreach($cartColor as $chk1color)  
   {  
      $chkcolor.= $chk1color." ";  
   }
  $insertToCart->bindParam("getfileID",$cartID);
  $insertToCart->bindParam("productName",$cartbrand);
  $insertToCart->bindParam("productPrice",$cartPrice);
  $insertToCart->bindParam("getImage",$cartImage);
  $insertToCart->bindParam("size",$chksize);
  $insertToCart->bindParam("category",$cartCatogary);
  $insertToCart->bindParam("color",$chkcolor);
  $insertToCart->bindParam("quantity",$quantity);
  $insertToCart->bindParam("IDLogin",$cartforemail);
  $insertToCart->execute();

  //
  header("location: cart design.php");
}

if(isset($_POST['buy'])){
  $_SESSION['quantity']=$_POST["quantity"];
 

  
  $tocart=$database->prepare("SELECT * FROM getfile where ID=:details");
  $tocart->bindParam("details",$_GET['moveImage']);
  $tocart->execute();
  $tocart=$tocart->fetchObject();


   $cartID=$tocart->ID;
   $cartbrand=$tocart->brand;
   $cartPrice=$tocart->price;
   $cartImage=$tocart->imageName;
   $cartSize=$_POST["size"];
   $cartCatogary=$tocart->categoryCat;
   $cartColor=$_POST["color"];
   $quantity=$_POST["quantity"];

  //  $cartforemail=$_SESSION["getEmailLogin"];
  $cartforemail=$_COOKIE['emailfromlogin'];

  $insertToCart=$database->prepare("INSERT into cart(getfileID, productName, productPrice, getImage, size, category, color, quantity,IDLogin) 
  VALUES(:getfileID, :productName, :productPrice, :getImage, :size, :category, :color, :quantity,:IDLogin)");

$chksize="";  
foreach($cartSize as $chk1size)  
   {  
      $chksize.= $chk1size." ";  
   }

   $chkcolor="";  
foreach($cartColor as $chk1color)  
   {  
      $chkcolor.= $chk1color." ";  
   }
  $insertToCart->bindParam("getfileID",$cartID);
  $insertToCart->bindParam("productName",$cartbrand);
  $insertToCart->bindParam("productPrice",$cartPrice);
  $insertToCart->bindParam("getImage",$cartImage);
  $insertToCart->bindParam("size",$chksize);
  $insertToCart->bindParam("category",$cartCatogary);
  $insertToCart->bindParam("color",$chkcolor);
  $insertToCart->bindParam("quantity",$quantity);
  $insertToCart->bindParam("IDLogin",$cartforemail);
  $insertToCart->execute();
  
  header("location: Buynow.php?buy=$sql1->ID");
}

if(!isset($_COOKIE['emailfromlogin']) && isset($_POST['buy'])){
  header("location: login/login form.php");
}

if(!isset($_COOKIE['emailfromlogin']) && isset($_POST['cartt'])){
  header("location: login/login form.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Details product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
          font-family: Arial;
        }
        .mySlides {
          display: none;
        }
        .cursor {
          cursor: pointer;
        }
        .demo {
          opacity: 0.6;
        }
        .active,
        .demo:hover {
          opacity: 1;
        }
        </style>
        <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>
</head>
  <body>
        <?php include 'header.php';?>


      <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
          <div class="row">
              <div class="col-lg-6 col-md-8 ">
                    <div class="mySlides">
                    <img src="<?php echo $showImage1?>" style="width:100%;height:500px">
                  </div>
                  <div class="mySlides">
                    <img src="<?php echo $showImage2?>" style="width:100%;height:500px">
                  </div>
                  <div class="mySlides">
                    <img src="<?php echo $showImage3?>" style="width:100%;height:500px">
                  </div>
                  <div class="row">
                    <div class="col " >
                      <img class=" demo cursor w-100 pt-2  "  src="<?php echo $showImage1?>"  onclick="currentSlide(1)" alt="" style="width:150px;height:150px;">
                    </div>
                    <div class="col "  >
                      <img class=" demo cursor w-100 pt-2 " src="<?php echo $showImage2?>"  onclick="currentSlide(2)" alt="" style="width:150px;height:150px;">
                    </div>
                    <div class="col "  >
                      <img class=" demo cursor w-100 pt-2 " src="<?php echo $showImage3?>"  onclick="currentSlide(3)" alt=""style="width:150px;height:150px;">
                    </div>
                  </div>
              </div>
              <div class="container col-lg-6 col-md-4 ">
                <h2>Brand <?php echo $sql1->brand;?> </h2>
                <p class="mb-2  text-uppercase "><?php echo $sql1->	categoryCat;?></p>
                <ul style="list-style: none; padding-left: inherit;">
                    <div class="row">
                    <li>
                      <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                      <i class="fas fa-star fa-sm text-primary"></i>
                    </li>
                    <li>
                      <i class="far fa-star fa-sm text-primary"></i>
                    </li>
                     </div>
                  </ul>

                  <p><span class="mr-1"><strong>$<?php echo $sql1->price;?></strong></span></p>

                  <div class="font-weight-bold">
                      Color available
                  </div>

                  <form method="post"> 

                   <div class="pl-3">
                   <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox4" name="color[]" value="<?php echo $sql1->color1?>">
                    <label class="form-check-label" for="inlineCheckbox4"><img src="color-wheel.png" style="width: 20px; height: 20px;" alt=""> 
                    <?php echo $sql1->color1?></label>
                  </div>
                    
                 

                  <div class="form-check ">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox5" name="color[]" value="<?php echo $sql1->color2?>">
                    <label class="form-check-label" for="inlineCheckbox5"><img src="color-wheel.png" style="width: 20px; height: 20px;" alt=""> 
                    <?php echo $sql1->color2?></label>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox6" name="color[]" value="<?php echo $sql1->color3?>">
                    <label class="form-check-label" for="inlineCheckbox6"><img src="color-wheel.png" style="width: 20px; height: 20px;" alt=""> 
                    <?php echo $sql1->color3?></label>
                  </div> 

                  </div>
                  <div class="pt-3 font-weight-bold">Size available</div>
                  <div class="pl-3">
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1"  name="size[]" value="<?php echo $sql1->size1?>">
                    <label class="form-check-label" for="inlineCheckbox1"><?php echo $sql1->size1?></label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2"  name="size[]" value="<?php echo $sql1->size2?>">
                    <label class="form-check-label" for="inlineCheckbox2"><?php echo $sql1->size2?></label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" id="inlineCheckbox3"  name="size[]" value="<?php echo $sql1->size3?>">
                    <label class="form-check-label" for="inlineCheckbox3"><?php echo $sql1->size3?></label>
                  </div>
                  </div>

                    <div class="table-responsive">
                        <table class="table table-sm table-borderless mb-0">
                          <tbody>
                            <tr>
                              <th class="pl-0 w-25" scope="row"><strong>Country</strong></th>
                              <td>Lebanon</td>
                            </tr>
                            <tr>
                              <th class="pl-0 w-25" scope="row"><strong>ِArea</strong></th>
                              <td>Zahli</td>
                            </tr>
                            <tr>
                              <th class="pl-0 w-25" scope="row"><strong>Brand</strong></th>
                              <td>Nike</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <hr>
                      <div class=" mb-2">
                        
                         
                            
                              <div class="pl-0 pb-0 w-25">Quantity</div>
                            
                              <div class="pl-0">
                                <div class="def-number-input number-input safari_only mb-0">
                                  
                                  <input class="quantity" min="1" name="quantity" value="1" type="number">
                                  
                                </div>
                            </div>
                            
                          
                        
                      </div>
                      <button name="buy" class="btn btn-primary btn-md mr-1 mb-2 waves-effect waves-light">Buy now</button>
                      <button type="submit" class="btn btn-light btn-md mr-1 mb-2 waves-effect waves-light" name="cartt"><i class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
                      </form> 
                    </div>
            
          </div>
      </div>
      <?php include 'footer.php';?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        // function plusSlides(n) {
        //   showSlides(slideIndex += n);
        // }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("demo");
          
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          
        }
        </script>
</body>
</html>