
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
$_SESSION["linkself"]=$_SERVER['PHP_SELF'];

if(isset($_GET['moveImage'])){
    // echo $_GET['moveImage'];
    
    // header("Location: http://localhost/learn%20php/product/bootstrab.php?product=".$sql["id"]);
  
    header("Location: detailsproduct.php?moveImage=".$_GET['moveImage']);
    
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

      if(isset($_GET['wish'])){
        $selecttowish=$database->prepare("SELECT * from getfile where ID=:wish");
        $selecttowish->bindParam('wish',$_GET['wish']);
        $selecttowish->execute();
        $selecttowish1=$selecttowish->fetchObject();

        $brandWish=$selecttowish1->brand;
        $priceWish=$selecttowish1->price;
        $imagewish=$selecttowish1->imageName;
        $idProduct=$selecttowish1->ID;

        $insertintowish=$database->prepare("INSERT into wishlist(brand,price,imageName,IDLogin,IDproduct) values(:brandWish,:priceWish,:imagewish,:emailfromlogin,:idProduct)");
        $insertintowish->bindParam("brandWish",$brandWish);
        $insertintowish->bindParam("priceWish",$priceWish);
        $insertintowish->bindParam("imagewish",$imagewish);
        $insertintowish->bindParam("emailfromlogin",$_COOKIE['emailfromlogin']);
        $insertintowish->bindParam("idProduct",$idProduct);
        $insertintowish->execute();
        header("location: womanshirt.php");
      }
      if(!isset($_COOKIE['emailfromlogin']) && isset($_GET['wish'])){
        header("location: login/login form.php");
      }
?>



         <!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="img/RB.jpg" type="image/x-icon"/>
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
.icon{
    padding-left: 23px !important;
    padding-top: 15px !important;
    padding-bottom: 15px !important;
    padding-right: 15px !important;
}
.searchButton {
  padding-left: 8px;
}
  </style>
      <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>

  </head>
  <body>
      
      
      <?php include "header.php";?>
      
      
    <div class="row mt-3">
    <div class="card col-lg-3 col-md-3 col-sm-6 " style="width: 35rem; border-style:none"> 
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
                            <li><a href="manshirt.php">T-shirt</a></li>
                                <li><a href="manpants.php">pants</a></li>
                                <li><a href="manshoes.php">shoes</a></li>
                                <li><a href="manaccess.php">Accessory</a></li>
                            </ul>
                        </li>
                        </ul>
                        
                            <ul class="show-dropdown">
                                <li>
                                    <a href="javascript:void(0);"><i class="fas fa-female"></i>women's</a>
                                    <ul>
                                    <li><a href="womanshirt.php">T-shirt</a></li>
                                        <li><a href="womenpants.php">pantes</a></li>
                                        <li><a href="shoeswomen.php">shoes</a></li>
                                        <li><a href="womanaccess.php">Accessory</a></li>
                                    </ul>
                                </li>
                                </ul>
            
                                <ul class="show-dropdown">
                                    <li>
                                        <a href="javascript:void(0);"><i class="fas fa-child"></i>Kids</a>
                                        <ul>
                                            <li><a href="shirtkids.php">T-shirt</a></li>
                                            <li><a href="pantskids.php">pantes</a></li>
                                            <li><a href="shoeskids.php">shoes</a></li>
                                            <li><a href="accesskids.php">Accessory</a></li>
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
            $getBrand=$database->prepare("SELECT * FROM getfile where categoryCat='Shirts' and personName ='Women' GROUP BY brand ORDER BY brand  ");
            $getBrand->execute();
             $cheked =[];
            if(isset($_GET['brand'])){
              $cheked=$_GET['brand'];
            }
            foreach($getBrand AS $showCheckBoxBrand){
               echo '<div class="form-check">';
                   echo' <input class="form-check-input common_selector brand" type="checkbox" value="'.$showCheckBoxBrand['brand'].'" name="brand" id="defaultCheck1" checked';
                   if(in_array($showCheckBoxBrand['brand'],$cheked)){echo 'checked';}'>';
                  echo'  <label class="form-check-label" for="defaultCheck1">'.$showCheckBoxBrand['brand'].'</label></div>';
            }
            ?>
                  
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
                    <input class="form-check-input common_selector price" type="radio" name="exampleRadios111" id="exampleRadios1" value="50">
                    <label class="form-check-label" for="exampleRadios1">
                      $0 - $50
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input common_selector price" type="radio" name="exampleRadios111" id="exampleRadios2" value="100">
                    <label class="form-check-label" for="exampleRadios2">
                      $50-$100
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input common_selector price" type="radio" name="exampleRadios111" id="exampleRadios3" value="150">
                    <label class="form-check-label" for="exampleRadios3">
                      $100-$150
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input common_selector price" type="radio" name="exampleRadios111" id="exampleRadios" value="200">
                    <label class="form-check-label" for="exampleRadios4">
                      $150-$200
                    </label>
                  </div>
                </form>
  
              </div>
          </div>
      </article> 
    </div> 

    <div class=" col-lg-9 col-md-9 col-sm-6 ">
      <div class="row filter_data">
      
      
      
 
          
    
        </div>
    </div>
  </div>




  <?php  include "footer.php";?>

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
        <script >
          $(document).ready(function(){

filter_data();

function filter_data()
{
    $('.filter_data').html('');
    var action = 'fetch_data';
    
    var brand = get_filter('brand');
    var price=get_filter('price');
    
   
    $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{action:action,brand:brand,price:price},
        success:function(data){
            $('.filter_data').html(data);
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.common_selector').click(function(){
    filter_data();
});



});
        </script>
        
  </body>
</html>