<?php 
require '../db.php';
$selectImage=$database->prepare("SELECT * from getfile wh");
$selectImage->execute();
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
      .a{
        border-left-width: 5px;
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
<div class="container pt-2">
        <div class="row">
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Users activated</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php 
                                        $selectImage=$database->prepare("SELECT * from loginpage where activated= true ");
                                        $selectImage->execute();
                                        echo $selectImage->rowCount();
                                        ?> 
                                        <!-- <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Users not active</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php 
                                        $selectImage1=$database->prepare("SELECT * from loginpage where activated= false ");
                                        $selectImage1->execute();
                                        echo $selectImage1->rowCount();
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Product Men</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php 
                                        $selectImage2=$database->prepare("SELECT * from getfile where personName= 'Men' ");
                                        $selectImage2->execute();
                                        echo $selectImage2->rowCount();
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">product Woman</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php 
                                        $selectImage2=$database->prepare("SELECT * from getfile where personName= 'Women' ");
                                        $selectImage2->execute();
                                        echo $selectImage2->rowCount();
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Kids Woman</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php 
                                        $selectImage3=$database->prepare("SELECT * from getfile where personName= 'Kids' ");
                                        $selectImage3->execute();
                                        echo $selectImage3->rowCount();
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-md-6">
                                <div class="card bg-info text-white mb-4">
                                    <div class="card-body">Sales</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php 
                                        $selectImage4=$database->prepare("SELECT * from cart where checkout= 'checkout' ");
                                        $selectImage4->execute();
                                        echo $selectImage4->rowCount();
                                        ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                      <din class="card">
                        <div class="card-header">
                          Sales & Details
                                 
                        </div>
                        <div class="card-body"> 
                          <div class="row">
                          <div class="col w-25" style=" border-left:5px blue solid;padding-left:3px">New client</div>
                          <div class="col  w-25" style=" border-left:5px red solid;padding-left:3px">Old clinet</div>
                          <div class="col  w-25" style=" border-left:5px yellow solid;padding-left:3px">Followers</div>
                          <div class="col  w-25" style=" border-left:5px green solid;padding-left:3px">Visit Social Media</div>   
                          </div>
                        <div class="row d-flex align-items-center">
                          <div class="col  w-50 py-3" >
                            <div style="padding: 10px 0px;">
                              <div class="col">Monday</div>
                              <div class="col"><div class="progress" style="height: 3px;">
                                            <div class="progress-bar " role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress"style="height: 3px;">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            </div>
                            <div style="padding: 10px 0px;">
                            <div class="col">Tuesday</div>
                              <div class="col">
                              <div class="progress" style="height: 3px;">
                                            <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress"style="height: 3px;">
                             <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                              </div>
                            </div>

                            <div style="padding: 10px 0px;">
                              <div class="col">Wednesday</div>
                              <div class="col">
                              <div class="progress" style="height: 3px;">
                                            <div class="progress-bar " role="progressbar" aria-valuenow="25" style="width: 60%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress"style="height: 3px;">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                              </div>
                            </div>
                            <div style="padding: 10px 0px;">
                              <div class="col">Thursday</div>
                              <div class="col">
                              <div class="progress" style="height: 3px;">
                                            <div class="progress-bar " role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress"style="height: 3px;">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                              </div>
                            </div>
                            <div style="padding: 10px 0px;">
                              <div class="col">Friday</div>
                              <div class="col">
                              <div class="progress" style="height: 3px;">
                                            <div class="progress-bar " role="progressbar" aria-valuenow="25"style="width: 50%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress"style="height: 3px;">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                              </div>

                            </div>
                            <div style="padding: 10px 0px;">
                              <div class="col">Saturday</div>
                              <div class="col">
                              <div class="progress" style="height: 3px;">
                                            <div class="progress-bar " role="progressbar" aria-valuenow="25" style="width: 10%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress"style="height: 3px;">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                              </div>
                            </div>
                            <div style="padding: 10px 0px;">
                              <div class="col">Sunday</div>
                              <div class="col">
                              <div class="progress" style="height: 3px;">
                                            <div class="progress-bar " role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="progress"style="height: 3px;">
                                              <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                              </div>
                            
                          </div>
                          </div>

                          <div class="col w-50 ">
                          <div style="padding: 10px 0px;">
                              <div class="col"><i class="fas fa-male"></i> Male</div>
                              <div class="col">
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                               </div>
                          </div>

                          <div style="padding: 10px 0px;">
                               <div class="col"><i class="fas fa-female"></i> Female</div>
                              <div class="col">
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                               </div>
                          </div>
                                <hr>      
                                <div style="padding: 10px 0px;">
                               <div class="col"><i class="fab fa-facebook"></i> Facebook</div>
                              <div class="col">
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                               </div>
                                </div>
                                <div style="padding: 10px 0px;">
                               <div class="col"><i class="fab fa-google"></i> Google</div>
                              <div class="col">
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 95%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                               </div>
                                </div>
                                <div style="padding: 10px 0px;">
                               <div class="col"><i class="fab fa-youtube"></i> Youtube</div>
                              <div class="col">
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                               </div>
                                </div>
                                <div style="padding: 10px 0px;">
                               <div class="col"><i class="fab fa-instagram"></i> Instagram</div>
                              <div class="col">
                                <div class="progress" style="height: 5px;">
                                  <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                               </div>
                                </div>
                          </div>

                          
                        </div>                      
                        </div>                         
                      </div>

                      <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white " style="background-image:linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%)">
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