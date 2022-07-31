<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 Error</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

<?php
if(isset($_GET['Code']))
{
    $db=new PDO('mysql:host=localhost; dbname=getfile;','root','');
    $checkCode=$db->prepare("SELECT security_cod from loginpage where security_cod =:security_cod");
    $checkCode->bindParam("security_cod",$_GET['Code']);
    
    $checkCode->execute();
    $checkCode->errorInfo();
    if($checkCode->rowCount()>0){
        $update=$db->prepare("UPDATE loginpage SET security_cod =:newSecurity_cod , activated = true where 
        security_cod =:security_cod");
        $securityCode1=md5(date("h:i:s"));
        $update->bindParam("security_cod",$_GET['Code']);
        $update->bindParam("newSecurity_cod",$securityCode1);
        
        
        if($update->execute()){
            echo '<div class="d-flex justify-content-center pt-5"> 
        <div class="spinner-border text-primary " role="status">
        <span class="visually-hidden"></span>
      </div> </div>';
        echo '<script>setTimeout(function(){
            window.location.href = "login form.php";
         }, 3000); </script>';
            // header("location:login form.php");
        }
    }else{
        
        include("404.php");
        // echo '<h1 class="text-align=center;"> The code is already use </h1>';
        // echo '<script>setTimeout(function(){
        //     window.location.href = "login form.php";
        //  }, 5000); </script>';
    }
}


?>


</body>
</html>

