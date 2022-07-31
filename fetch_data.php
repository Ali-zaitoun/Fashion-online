<?php

//fetch_data.php
session_start();

require 'db.php';


if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM getfile  
 ";
 
 if(isset($_POST["brand"]))
 {
  $brand_filter = implode("','", $_POST["brand"]);
  $query .= "
  WHERE brand IN('".$brand_filter."')
  ";
 }

 if(isset($_POST["price"]))
 {
  $brand_filter1 = implode("','", $_POST["price"]);
  if($brand_filter1 <=50 ){
  $query .= "
  WHERE price between 0 and $brand_filter1
  ";
  }
    else if($brand_filter1 >=50 && $brand_filter1 <=100){
      $query .= "
    WHERE price between 50 and $brand_filter1
    ";
    }else if($brand_filter1 >= 100 && $brand_filter1<=150){
      $query .= "
    WHERE price between 100 and $brand_filter1
    ";
    }else if($brand_filter1 >= 150 && $brand_filter1<=200){
      $query .= "
    WHERE price between 150 and $brand_filter1
    ";
    }
 }


 if(isset($_POST["brand"]) && isset($_POST["price"])){
  //  echo"asankpnksnknaknksnknkcakpnskncnkankscnk";
  $brand_filter1111 = implode("','", $_POST["brand"]);
  $price_filter1111 = implode("','", $_POST["price"]);
  // $implodePrice=implode("'-'",$_POST["price"]);
  $query = "
  SELECT * FROM getfile where brand IN('".$brand_filter1111."') 
  "; 
  if($brand_filter1 <=50 ){
    $query .= "
    And price between 0 and $price_filter1111
    ";
    }
      else if($price_filter1111 >=50 && $price_filter1111 <=100){
        $query .= "
        And price between 50 and $price_filter1111
      ";
      }else if($price_filter1111 >= 100 && $price_filter1111<=150){
        $query .= "
        And price between 100 and $price_filter1111
      ";
      }else if($price_filter1111 >= 150 && $price_filter1111<=200){
        $query .= "
        And price between 150 and $price_filter1111
      ";
      }
}

 $statement = $database->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $total_row = $statement->rowCount();
 $output = '';
  foreach($result as $sql)
  {

    if($total_row  == 1){
                echo'<div class=" col-lg-6 col-md-6 col-sm-12 py-2 "  >';
               }else {
                echo'<div class=" col-lg-4 col-md-6 col-sm-12 py-2 "  >';
        
               }
  echo '
   
   <div class="product-wrapper  text-center">
     <div class="product-img">
              <a href="#" data-abc="true"> <img src="image/'.$sql['imageName'].'" alt="" style="height: 300px; width: 100%;"></a>
            <span class="text-center"><i class="fa fa-usd" aria-hidden="true"></i>'.$sql['price'].'</span>
              <div class="product-action">
          <div class="product-action-style">
          <a href="detailsproduct.php?moveImage='.$sql["ID"].'"><i class="fa fa-plus"></i></a>
              <a href="'.$_SESSION["linkself"].'?wish='.$sql["ID"].'"><i class="fa fa-heart"></i></a>
                 <a href="detailsproduct.php?moveImage='.$sql["ID"].'"><i class="fa fa-shopping-cart"></i></a> 
                           </div>
           </div>
                   </div>
               </div>
               </div>
   ';
  }
 

}

?>

