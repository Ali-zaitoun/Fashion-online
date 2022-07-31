<?php
 require 'db.php';


        $getfromlogin=$database->prepare("SELECT * from loginpage WHERE email=:cookieEmail");
          $getfromlogin->bindParam("cookieEmail",$_COOKIE['emailfromlogin']);
          $getfromlogin->execute();
          $getfromlogin1=$getfromlogin->fetchObject();

$fullname1=explode(" ",$getfromlogin1->name);
// echo $getfromlogin1->fileName;

if(isset($_POST['save'])){

    $name=$_FILES['fileImage']['name']; 
    $tmp_name=$_FILES['fileImage']['tmp_name'];
    $size=$_FILES['fileImage']['size']; 
    $type=$_FILES['fileImage']['type']; 
    $nameUser=$_POST['nameUser'];
    // $emailUser=$_POST['emailUser'];
    $passwordUser=$_POST['passwordUser'];
    $locationImage= move_uploaded_file($_FILES['fileImage']['tmp_name'],"login/imges/".$_FILES['fileImage']['name']);

    $updateDataLogin=$database->prepare("UPDATE loginpage set `name`=:nameUser,`password`=:passwordUser,activated=1,`fileName`=:name,`fileSize`=:size,`fileLocation`=:tmp_name,`fileType`=:type  WHERE email=:cookieEmail1");
    $updateDataLogin->bindParam("cookieEmail1",$_COOKIE['emailfromlogin']);
    $updateDataLogin->bindParam("nameUser",$nameUser);
    // $updateDataLogin->bindParam("emailUser",$emailUser);
    $updateDataLogin->bindParam("passwordUser",$passwordUser);
    $updateDataLogin->bindParam("name",$name);
    $updateDataLogin->bindParam("tmp_name",$tmp_name);
    $updateDataLogin->bindParam("size",$size);
    $updateDataLogin->bindParam("type",$type);
    $updateDataLogin->execute();
    
    header("location: profile.php");

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
        <style>
body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #5426f8;

    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav .user-heading.round a  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
    border: 10px solid rgba(255,255,255,0.3);
    display: inline-block;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #5426f8;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #5426f8;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}



#hide{
    display: none;
}

        </style>
        <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>
</head>
  <body>
  <?php include 'header.php';?>


    <div class="container bootstrap snippets bootdey">
        <div class="row">
          <div class="profile-nav col-md-3">
              <div class="panel">
                  <div class="user-heading round">
                      <a href="#">
                          <img src="login/imges/<?php echo $getfromlogin1->fileName?>" alt="">
                      </a>
                      <h1><?php echo $getfromlogin1->name?></h1>
                      <p><?php echo $getfromlogin1->email?></p>
                  </div>
        
                  <ul class="nav nav-pills nav-stacked">
                      <li class="active"><a href="#"> <i class="fa fa-user"></i>Profile</a></li>
                      <li><button  onclick="myFunction()" style="border-style: none; background:none;color:inherit;outline:none"> <i class="fa fa-edit"></i> Edit profile</button></li>
                      
                  </ul>
              </div>
          </div>
          <div class="profile-info col-md-9">
             
              <div class="panel">
                  <div class="bio-graph-heading">
                      Welcom in our Royal Brand this page is information about you if you need to edit you informatin please click on edit profile below your photo
                  </div>
                  <div class="panel-body bio-graph-info">
                      <h1>Information</h1>
                      <div class="row">
                          <div class="bio-row">
                              <p><span>First Name </span>: <?php echo $fullname1[0]?></p>
                          </div>
                          <div class="bio-row">
                              <p><span>Last Name </span>: <?php echo $fullname1[1]?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Email </span>: <?php echo $getfromlogin1->email?></p>
                        </div>
                        <div class="bio-row">
                            <p><span>Activation</span>: <?php if( $getfromlogin1->activated==1){echo 'True'; }else{echo'False';}?></p>
                        </div>
                      </div>
                  </div>
              </div>
              
          </div>
        </div>
        </div>

<div id="hide">
        <div class="container" >
            <h1 class="text-center m-5">Edit Your Profile</h1>
            <div class="row jumbotron" >
                <div class="col  ">
                    <div class="card mx-auto shadow p-3 mb-5 bg-white rounded " style="width: 18rem; height: 350px;">
                        <h3 class="text-center ">Profile picture</h3>
                        <div class="text-center "    >
                                <img src="login/imges/<?php echo $getfromlogin1->fileName?>" alt="" style="width: 200px; height: 200px; border-radius: 50%;" id="setfirstimage">
                         </div>


                        <div class="text-center p-2"><?php echo $getfromlogin1->name?> </div>
                  </div>
                </div>
                <div class="col">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group mt-2">
                          <label >Name</label>
                          <input type="text" name="nameUser" class="form-control" placeholder="<?php echo $getfromlogin1->name?>">
                        </div>
                        <div class="form-group mt-2">
                          <label >Email</label>
                          <input type="email" name="emailUser" class="form-control" value="<?php echo $getfromlogin1->email?>"  disabled="disabled">
                        </div>

                        <div class="form-group mt-2">
                          <label >Password</label>
                          <input type="password" name="passwordUser" class="form-control" placeholder="password">
                        </div>

                        <div class="input-group mb-3">
                            
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01" style="font-size: inherit; padding:0px;">Update Image</span>
                            </div>
                            <div class="custom-file">
                              <input type="file" name="fileImage" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" onchange="document.getElementById('setfirstimage').src = window.URL.createObjectURL(this.files[0])">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                        
                        <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                        <div class="btn-group d-flex justify-content-between" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-danger " onclick="myFunction()">Cancel</button>
                            <input type="reset" class="btn btn-outline-info" value="Reset">
                            <button type="submit" class="btn btn-outline-success" name="save">Save</button>
                          </div>
                      </form>
                </div>
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
        function myFunction() {
  var x = document.getElementById("hide");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
    </script>
</body>
</html>