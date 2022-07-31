<?php
 require 'db.php';

// if($database){
//     echo"true"."<br>";
// }
// session_start();
// $_SESSION["pathFiles"];
$selectImage=$database->prepare("SELECT * from getfile");
$selectImage->execute();

session_start();

if(isset($_GET['moveImage'])){
    // echo $_GET['moveImage'];
    
    // header("Location: http://localhost/learn%20php/product/bootstrab.php?product=".$sql["id"]);
  
    header("Location: http://localhost/uplode%20images%20product/detailsproduct.php?moveImage=".$_GET['moveImage']);
    
    $_SESSION['getId']=$_GET['moveImage'];
    
    echo $_SESSION['getId'];
      
    }

    // if(isset($_GET['cart'])){

      // $getToAddCart=$database->prepare("SELECT * from getfile where ID=:cart");
      // $getToAddCart->bindParam("cart",$_GET['cart']);
      // $getToAddCart->execute();
      // $getToAddCart1=$getToAddCart->fetchObject();

      // echo $getToAddCart1->ID;


      
      // $addtocart=$database->prepare("INSERT INTO cart(getfileID,productName,productPrice) values(:getfileID,:productName,:productPrice)");
      // $addtocart->bindParam("getfileID",$getToAddCart1->ID);
      // $addtocart->bindParam("productName",$getToAddCart1->brand);
      // $addtocart->bindParam("productPrice",$getToAddCart1->price);
      // $addtocart->execute();
      // header("Location: http://localhost/uplode%20images%20product/anathor%20cart%20design.php?cart=".$_GET['cart']);
      

     
        
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

    <style>
 
#accordian {
background: #fff;
width: 156px;
/* padding: 10px; */
float: left;
/* height: 100vh; */
overflow-x: hidden;
}
i {
margin-right: 10px;
}
#accordian li {
list-style-type: none;
}
#accordian ul li a{
color: #9c9c9c;
text-decoration: none;
font-size: 15px;
display: block;
/* 	line-height: 34px; */
padding: 12px 15px;
transition: all 0.15s;
position: relative;
border-radius: 3px;
}
#accordian>ul.show-dropdown>li.active>a,
#accordian>ul>li>ul.show-dropdown>li.active>a{
  background-color: #a8d4fb;
  color: #0089ff;
  box-shadow: 0px 1px 2px rgba(0, 137, 255, 0.2);
}
#accordian>ul>li>ul{
  display: none;
}
#accordian>ul>li.active>ul.show-dropdown{
  display: block;
}
#accordian>ul>li>ul{
  padding-left: 20px;
}
#accordian a:not(:only-child):after {
content: "\f105";
  position: absolute;
  right: 0px;
  /* left: 10px; */
  top: 14px;
  font-size: 15px;
  font-family: "Font Awesome 5 Free";
  display: inline-block;
  padding-right: 3px;
  vertical-align: middle;
  font-weight: 900;
  transition: 0.5s;
}

#accordian .active>a:not(:only-child):after {
  transform: rotate(90deg);
}
body {
    vertical-align: middle;
    display: flex;
    font-family: 'Calibri', sans-serif !important;
    background-color: #eee
}

.mt-100 {
    margin-top: 100px
}

.product-wrapper,
.product-img {
    overflow: hidden;
    position: relative
}

.mb-45 {
    margin-bottom: 45px
}

.product-action {
    bottom: 0px;
    left: 0;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: center;
    transition: all 0.6s ease 0s
}

.product-wrapper {
    border-radius: 10px
}

.product-img>span {
    background-color: #fff;
    box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
    color: #333;
    display: inline-block;
    font-size: 12px;
    font-weight: 500;
    left: 20px;
    letter-spacing: 1px;
    padding: 3px 12px;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    top: 20px
}

.product-action-style {
    background-color: #fff;
    box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
    display: inline-block;
    padding: 16px 2px 12px
}

.product-action-style>a {
    color: #979797;
    line-height: 1;
    padding: 0 21px;
    position: relative
}

.product-action-style>a.action-plus {
    font-size: 18px
}

.product-wrapper:hover .product-action {
    bottom: 20px;
    opacity: 1
}
.fa-plus:hover{
    color: blue;
}
.fa-heart:hover{
    color: red;
}
.fa-shopping-cart:hover{
    color: blue;
}
.fa-usd{
  color: blue;
}
.row{
  margin-right: 0px;
}
  </style>
      <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>

  </head>
  <body>
    
    <div class="row">
    <div class="card col-lg-3 col-md-3 col-sm-6 " style="width: 35rem;"> <!-- style="height: 690px;" -->
        <article class="card-group-item ">
            <header class="card-header text-primary text-center">
                <h6 class="title">catogray </h6>
            </header>
            <div class="filter-content w-100">
                <div class="card-body">
                
                  <div id="accordian" >
                    <ul class="show-dropdown">
                        
                        <li>
                            <a href="javascript:void(0);"><i class="fas fa-male"></i>Men's</a>
                            <ul>
                                <li><a href="javascript:void(0);">T-shirt</a></li>
                                <li><a href="javascript:void(0);">pants</a></li>
                                <li><a href="javascript:void(0);">shoes</a></li>
                                <li><a href="javascript:void(0);">Accessory</a></li>
                            </ul>
                        </li>
                        </ul>
                        
                            <ul class="show-dropdown">
                                <li>
                                    <a href="javascript:void(0);"><i class="fas fa-female"></i>women's</a>
                                    <ul>
                                        <li><a href="javascript:void(0);">T-shirt</a></li>
                                        <li><a href="javascript:void(0);">pantes</a></li>
                                        <li><a href="javascript:void(0);">shoes</a></li>
                                        <li><a href="javascript:void(0);">Accessory</a></li>
                                    </ul>
                                </li>
                                </ul>
            
                                <ul class="show-dropdown">
                                    <li>
                                        <a href="javascript:void(0);"><i class="fas fa-child"></i>Kids</a>
                                        <ul>
                                            <li><a href="javascript:void(0);">T-shirt</a></li>
                                            <li><a href="javascript:void(0);">pantes</a></li>
                                            <li><a href="javascript:void(0);">shoes</a></li>
                                            <li><a href="javascript:void(0);">Accessor</a></li>
                                        </ul>
                                    </li>
                                    </ul>
            
                                </div>
                </div> 
                
            </div>
          
        </article> 
        <article class="card-group-item ">
            <header class="card-header text-center">
                <h6 class="title text-primary">Brand </h6>
            </header>
            <div class="filter-content">
                <div class="card-body">
                <form method="Get">
            <?php
            $getBrand=$database->prepare("SELECT * FROM getfile GROUP BY brand ORDER BY brand");
            $getBrand->execute();
             $cheked =[];
            if(isset($_GET['brand'])){
              $cheked=$_GET['brand'];
            }
            foreach($getBrand AS $showCheckBoxBrand){
               echo '<div class="form-check">';
                   echo' <input class="form-check-input" type="checkbox" value="'.$showCheckBoxBrand['brand'].'" name="brand[]"  id="defaultCheck1" ';
                   
                   if(in_array($showCheckBoxBrand['brand'],$cheked)){echo 'checked';}'>';
                  echo'  <label class="form-check-label" for="defaultCheck1">'.$showCheckBoxBrand['brand'].'</label></div>';
                 

                  
            }

            echo' <input type="submit" value="search" class="btn btn-primary float-right">';
            ?>

                  <!-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="nike" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Nike
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                     lacost
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      brand
                    </label>
                  </div> -->
                </form>
    
                </div>
            </div>
        </article> 

        <article class="card-group-item " >
          <header class="card-header text-center" >
              <h6 class="title text-primary">Price </h6>
          </header>
          <div class="filter-content" >
              <div class="card-body">
                <form >
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      $50-$100
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                      $150-$200
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                    <label class="form-check-label" for="exampleRadios3">
                      $250-$300
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
                    <label class="form-check-label" for="exampleRadios4">
                      $350-$400
                    </label>
                  </div>
                </form>
  
              </div>
          </div>
      </article> 
    </div> 

    <div class=" col-lg-9 col-md-9 col-sm-6">
      <div class="row">
          <?php
if(isset($_GET["brand"])){
  
  $params = implode(",", array_fill(0, count($_GET["brand"]), "?"));
  $showImageCheckBox=$database->prepare("SELECT * FROM getfile where brand IN ($params)");
          $showImageCheckBox->execute($_GET["brand"]);
          

        // echo ($showImageCheckBox ->rowCount());
  foreach ($showImageCheckBox AS $sql1){
    //  $getFile="data:".$sql1['filetypeimage'].";base64,".base64_encode($sql1['image1']);
    //  echo '<div class="w-100"></div>';
    if($showImageCheckBox ->rowCount() == 1){
        echo'<div class=" col-lg-6 col-md-6 col-sm-12 py-2 "  >';
       }else {
        echo'<div class=" col-lg-4 col-md-6 col-sm-12 py-2 "  >';

       }
       echo'<div class="product-wrapper text-center">';
          echo   '<div class="product-img">'; 
          echo "<a href='#' data-abc='true'> <img src=image/".$sql1['imageName']." alt='' style='height: 300px; width: 100%;'></a>";
          echo  '<span class="text-center"><i class="fa fa-usd" aria-hidden="true"></i> '.$sql1['price'].'</span>';
          echo      '<div class="product-action">';
          echo         '<div class="product-action-style">';
         echo "<a href='http://localhost/uplode%20images%20product/detailsproduct.php?moveImage=".$sql1["ID"]."'><i class='fa fa-plus'></i></a>";
             echo'<a href="#"><i class="fa fa-heart"></i></a>' ;
                echo"<a href='http://localhost/uplode%20images%20product/detailsproduct.php?moveImage=".$sql1["ID"]."'><i class='fa fa-shopping-cart'></i></a> ";
                echo'</div>';
        echo     '</div>
              </div>
          </div>
      </div>';
      }
 
}else{
  foreach ($selectImage AS $sql){
        //  $getFile="data:".$sql['filetypeimage'].";base64,".base64_encode($sql['image1']);
         echo'<div class="col-lg-4 col-md-6 col-sm py-2" >';
           echo'<div class="product-wrapper  text-center">';
              echo   '<div class="product-img">'; 
              echo "<a href='#' data-abc='true'> <img src=image/".$sql['imageName']." alt='' style='height: 300px; width: 100%;'></a>";
              echo  '<span class="text-center"><i class="fa fa-usd" aria-hidden="true"></i>'.$sql['price'].'</span>';
              echo      '<div class="product-action">';
              echo         '<div class="product-action-style">';
             echo "<a href='http://localhost/uplode%20images%20product/detailsproduct.php?moveImage=".$sql["ID"]."'><i class='fa fa-plus'></i></a>";
                 echo               '<a href="#"><i class="fa fa-heart"></i></a>';
                 echo"<a href='http://localhost/uplode%20images%20product/detailsproduct.php?moveImage=".$sql["ID"]."'><i class='fa fa-shopping-cart'></i></a> ";
                           echo'</div>';
            echo     '</div>
                  </div>
              </div>
          </div>';
          }
}  
          ?>
          
    
        </div>
    </div>
  </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <script >// -------multilevel-accordian-menu---------
        $(document).ready(function() {
            $("#accordian a").click(function() {
                var link = $(this);
                var closest_ul = link.closest("ul");
                var parallel_active_links = closest_ul.find(".active")
                var closest_li = link.closest("li");
                var link_status = closest_li.hasClass("active");
                var count = 0;
        
                closest_ul.find("ul").slideUp(function() {
                    if (++count == closest_ul.find("ul").length){
                        parallel_active_links.removeClass("active");
                        parallel_active_links.children("ul").removeClass("show-dropdown");
                    }
                });
        
                if (!link_status) {
                    closest_li.children("ul").slideDown().addClass("show-dropdown");
                    closest_li.parent().parent("li.active").find('ul').find("li.active").removeClass("active");
                    link.parent().addClass("active");
                }
            })
        });
        </script>
  </body>
</html>