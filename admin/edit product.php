<?php
require '../db.php';

if(isset($_GET["getId"])){
    $showvalue=$database->prepare("SELECT * FROM getfile WHERE ID=:ID");
    $showvalue->bindParam("ID",$_GET['getId']);
    $showvalue->execute();
    $editproduct =$showvalue->fetchObject();
    }

    if(isset($_POST['uplodeFile'])){

        // $del=$database->prepare("SELECT * FROM getfile WHERE ID=:ID");
        // $del->bindParam("ID",$_GET['getId']);
        // $del->execute();
        // $deletephot=$del->fetch(PDO::FETCH_ASSOC);
        // $files = [
        //     '../image/'.$deletephot['imageName'],
        //     '../image/'.$deletephot['image2Name'],
        //     '../image/'.$deletephot['image3Name']
        // ];
        // // echo print_r($files);
        // foreach ($files as $file) {
        //         if (file_exists($file)) {
                    
        //             unlink($file);
        //         } 
        //     }


        $name=$_FILES['uplodeImage']['name']; 
        $tmp_name=$_FILES['uplodeImage']['tmp_name']; 
        $size=$_FILES['uplodeImage']['size']; 
        $name2=$_FILES['uplode2Image']['name']; 
        $tmp_name2=$_FILES['uplode2Image']['tmp_name']; 
        $size2=$_FILES['uplode2Image']['size']; 
        $name3=$_FILES['uplode3Image']['name']; 
        $tmp_name3=$_FILES['uplode3Image']['tmp_name']; 
        $size3=$_FILES['uplode3Image']['size']; 
        $price=$_POST['price'];
        $brand=$_POST['brand'];
        

        $Esize1=$_POST['size1'];
        $Esize2=$_POST['size2'];
        $Esize3=$_POST['size3'];
        $Ecolor1=$_POST['color1'];
        $Ecolor2=$_POST['color2'];
        $Ecolor3=$_POST['color3'];

         $selecteditems = $_POST['cat'];   
        if($size>0 && $size2>0 && $size3>0){
            $locationImage= move_uploaded_file($_FILES['uplodeImage']['tmp_name'],"../image/".$_FILES['uplodeImage']['name']); 
            $locationImage2= move_uploaded_file($_FILES['uplode2Image']['tmp_name'],"../image/".$_FILES['uplode2Image']['name']); 
            $locationImage3= move_uploaded_file($_FILES['uplode3Image']['tmp_name'],"../image/".$_FILES['uplode3Image']['name']); 
            $sql=$database->prepare("UPDATE getfile SET price=:price,brand=:brand,size1=:Esize1,size2=:Esize2,size3=:Esize3,color1=:Ecolor1,color2=:Ecolor2,color3=:Ecolor3,imageName=:name,imageTmpName=:tmp_name,image2Name=:name2,image2TmpName=:tmp_name2,image3Name=:name3,image3TmpName=:tmp_name3,categoryCat=:selecteditem WHERE ID=:ID");
        $sql->bindParam("ID",$_GET["getId"]);
        $sql->bindParam("name",$name);
        $sql->bindParam("tmp_name",$tmp_name);
        $sql->bindParam("price",$price);
        $sql->bindParam("brand",$brand);
        $sql->bindParam("Esize1",$Esize1);
        $sql->bindParam("Esize2",$Esize2);
        $sql->bindParam("Esize3",$Esize3);
        $sql->bindParam("Ecolor1",$Ecolor1);
        $sql->bindParam("Ecolor2",$Ecolor2);
        $sql->bindParam("Ecolor3",$Ecolor3);
        $sql->bindParam("name2",$name2);
        $sql->bindParam("tmp_name2",$tmp_name2);
        $sql->bindParam("name3",$name3);
        $sql->bindParam("tmp_name3",$tmp_name3);
        
        $sql->bindParam("selecteditem",$selecteditems);
        $sql->execute();  
        
        
        }
        header("Location: http://localhost/uplode%20images%20product/edit%20and%20delete%20Product%20admin.php");
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

  
      <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12 text-center">
                <h2 class="tm-block-title d-inline-block ">Edit Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form  class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                  <div class="form-group mb-3">
                    <label for="name">Product Name </label>
                    <input id="name" name="brand" type="text" class="form-control validate"    placeholder="<?php echo $editproduct->brand;?>"/>
                  </div>
                  <div class="form-group ">
                        <label for="exampleInputEmail1">Enter Price</label>
                        <input type="text" class="form-control" name="price" value="" placeholder="<?php echo $editproduct->price;?>" id="exampleInputEmail1" aria-describedby="emailHelp" >
                        <small id="emailHelp" class="form-text text-muted">Enter Price of product</small>
                    </div>
                  <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select class="custom-select tm-select-accounts" id="category" name="cat">
                      <option selected><?php echo $editproduct->categoryCat?></option>
                      <?php 
                          $selectCat=$database->prepare("SELECT * from category");
                         $selectCat->execute();
                         foreach($selectCat AS $cat){
                            echo '<option value='.$cat['cat'].'>'.$cat['cat'].'</option>';
                        }
                         ?>
                    </select>
                  </div>
                  <div class="row">
                      <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label for="expire_date">Enter 1<sup>st</sup> Size </label>
                          <input id="expire_date"  type="text"  placeholder="<?php echo $editproduct->size1;?>" class="form-control validate"  name="size1"/>
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label for="expire_date">Enter 2<sup>nd</sup> Size </label>
                          <input id="expire_date"  type="text" placeholder="<?php echo $editproduct->size2;?>" class="form-control validate" data-large-mode="true" aria-describedby="forSize" name="size2"/>
                          
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label for="expire_date">Enter 3<sup>rd</sup> Size </label>
                          <input id="expire_date"  type="text"  placeholder="<?php echo $editproduct->size3;?>" class="form-control validate" data-large-mode="true" aria-describedby="forSize" name="size3"/>
                          
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label for="stock">Enter 1<sup>st</sup> color</label>
                          <input id="stock"  type="text"  placeholder="<?php echo $editproduct->color1;?>" class="form-control validate"  aria-describedby="forColores" name="color1"/>
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label for="stock">Enter 2<sup>nd</sup> color</label>
                          <input id="stock"  type="text"  placeholder="<?php echo $editproduct->color2;?>" class="form-control validate"  aria-describedby="forColores" name="color2"/>
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-4">
                          <label for="stock">Enter 3<sup>rd</sup> color</label>
                          <input id="stock"  type="text"  placeholder="<?php echo $editproduct->color3;?>" class="form-control validate"  aria-describedby="forColores" name="color3"/>
                        </div>
                  </div>
                  
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12">
              <div style="margin-bottom: 20px;">
              <div class="form-group rounded float-left ">
                    <label for="exampleFormControlFile1">Insert 1<sup>st</sup> in page product </label>
                    <input type="file" class="form-control-file" name="uplodeImage"  id="exampleFormControlFile1" onchange="document.getElementById('setfirstimage').src = window.URL.createObjectURL(this.files[0])">
                </div>
                <img id="setfirstimage" src="../image/<?php echo $editproduct->imageName;?>" class="rounded" width="100" height="100" />
                </div>
                    
                <div style="margin-bottom: 20px;">
                <div class="form-group float-left">
                    <label for="exampleFormControlFile2">Insert 2<sup>nd</sup> in page product details</label>
                    <input type="file" class="form-control-file" name="uplode2Image" id="exampleFormControlFile2" onchange="document.getElementById('setfirstimage2').src = window.URL.createObjectURL(this.files[0])">
                </div>
                <img id="setfirstimage2" src="../image/<?php echo $editproduct->image2Name;?>" class="rounded" width="100" height="100" />
                </div>

                <div style="margin-bottom: 20px;" >
                <div class="form-group float-left">
                    <label for="exampleFormControlFile3">Insert 3<sup>rd</sup> in page product details  </label>
                    <input type="file" class="form-control-file" name="uplode3Image" id="exampleFormControlFile3" onchange="document.getElementById('setfirstimage3').src = window.URL.createObjectURL(this.files[0])">
                </div>
                <img id="setfirstimage3" src="../image/<?php echo $editproduct->image3Name;?>" class="rounded" width="100" height="100" />
                </div>
              </div>
              
              <div class="col-12">
                <button  class="btn btn-primary btn-block text-uppercase" name="uplodeFile">confirm Edit</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    



      <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white mt-5" style="background-image:linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%)">
                        <div class="container text-center" >
                          <small>Copyright &copy; 2021 Royal Brand</small>
                        </div>
                    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>