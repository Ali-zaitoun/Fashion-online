<!-- $database =new PDO("mysql:host=localhost;dbname=uplodephot;","root","");
if(isset($_POST['signIn'])){
    $fileName=$_FILES['file']['name'];
    $fileType=$_FILES['file']['type'];
    if($fileType=="image/png"){
         $fileName=$_POST['user'].'.png';
    }else if($fileType=="image/jpg"){
         $fileName=$_POST['user'].'.jpg';
    }else if($fileType=="image/jpeg"){
         $fileName=$_POST['user'].'.jpeg';
    }
    $fileSize=$_FILES['file']['size'];
    $fileLocation=$_FILES['file']['tmp_name'];
    $insertPhoto=$database->prepare("INSERT INTO imges(fileName ,fileSize,fileLocation,fileType)
     VALUES(:fileName,:fileSize,:fileLocation,:fileType)");
    $insertPhoto->bindParam("fileName",$fileName);
    $insertPhoto->bindParam("fileSize",$fileSize);
    $insertPhoto->bindParam("fileLocation",$fileLocation);
    $insertPhoto->bindParam("fileType",$fileType);
    // $insertPhoto->execute();
    if($insertPhoto->execute()){
        move_uploaded_file($fileLocation,"imges/".$fileName);
        session_start();
        $_SESSION["photoUser"]=$fileName;
    }


} -->

<?php
require 'db.php';



if(isset($_POST['signup'])){

  $chechEmail=$db->prepare("SELECT email from loginpage where email=:email ");
  $chechEmail->bindParam("email",$_POST['email']);
  $chechEmail->execute();
  if($chechEmail->rowCount()>0){
    echo '<script> alert("the email is alredy exist"); </script>';
    
    
  }else{
    $nameSignUP=$_POST['name'];
    $emailSignUP=$_POST['email'];
    $passwordSignUP=$_POST['password'];

    $fileName=$_FILES['files']['name'];
    $fileType=$_FILES['files']['type'];
    $fileSize=$_FILES['files']['size'];
    $fileLocation=$_FILES['files']['tmp_name'];
    if($fileType=="image/png"){
         $fileName=$_POST['name'].'.png';
    }else if($fileType=="image/jpg"){
         $fileName=$_POST['name'].'.jpg';
    }else if($fileType=="image/jpeg"){
         $fileName=$_POST['name'].'.jpeg';
    }
    

  $regist=$db->prepare("INSERT INTO loginpage(name,email,password,typeofuser,security_cod,fileName,fileSize,fileLocation,fileType) 
  VALUES(:name,:email,:password,'user',:security_cod,:fileName,:fileSize,:fileLocation,:fileType)");
  $regist->bindParam("name",$nameSignUP);
  $regist->bindParam("email",$emailSignUP);
  $regist->bindParam("password",$passwordSignUP);
  $securityCode=md5(date("h:i:s"));
  $regist->bindParam("security_cod",$securityCode);
  $regist->bindParam("fileName",$fileName);
  $regist->bindParam("fileSize",$fileSize);
  $regist->bindParam("fileLocation",$fileLocation);
  $regist->bindParam("fileType",$fileType);
  
    if($regist->execute()){
      
      require "mail.php";
      
      move_uploaded_file($fileLocation,"imges/".$fileName);
        // session_start();
        // $_SESSION["photoUser"]=$fileName;
      
      $mail->Subject ="fashion  website verification code";

      $mail->Body = '<h1> thanks for regist in our website </h1>'.
      '<div> link verification code </div>'.
      "<a href='http://localhost/uplode%20images%20product/login/active.php?Code=".$securityCode."'>" 
      ."http://localhost/uplode%20images%20product/login/active.php?Code=".$securityCode."</a>";

        
        $mail->setFrom('ali.zaiton2005@gmail.com','Ali zaitoun');
        $mail->addAddress($emailSignUP);
        $mail->send();
        
    }else{
      echo '<script> alert("The Registration Failed"); </script>';
    }
  
  }

}



if(isset($_POST['signIn'])){
  $signIn=$db->prepare("SELECT name,email,password,activated,typeofuser from loginpage where email=:email and password=:password");
  $signIn->bindParam("email",$_POST['emailSignIn']);
  $signIn->bindParam("password",$_POST['passwordSginIn']);
 $signIn->execute();
  if($signIn->rowCount()===1){
    
    $user=$signIn->fetchObject();
    // print_r($user);
    if($user->activated == true){
      // header("location:https://www.google.com",true);
      session_start();
      $_SESSION['user']= $user;
      
      // header("location:home.php",true);
        if($user->typeofuser=="admin"){
          header("location:../admin/dashbord.php");
        }else{
          // $_SESSION["getEmailLogin"]=$_POST['emailSignIn'];
          // echo$_SESSION["getEmailLogin"];

          setcookie("emailfromlogin", $_POST['emailSignIn'],time() + (86400),"/");//86400 1day
          // header("location:http://localhost/uplode%20images%20product/show%20image.php");
          header("location:../index.php");
         
        }

    }else{

      echo '<script>
      if (confirm("Activation Your Account By Email"))
      {
          window.location = "https://mail.google.com/mail/u/0/#inbox";
      }
      else
      {
          window.location = "login form.php";
      }</script>';
      // echo '<script> alert("you should activation your account, we are send the activation code to email"); </script>';
    }
  }else{
    echo'<script>
    alert("You should enter a right information or create an account");
    </script>';
    // echo '<script> alert("you should create account"); </script>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../homepage/img/RB.jpg" type="image/x-icon"/>
<!-- <link rel="stylesheet" href="login form.css"> -->
<style>
  * {
    /* margin: 0;
    padding: 0;
     */
    box-sizing: border-box;
  
  }
  
  body {
    font-family: sans-serif;
    background: #f6f5f7;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 70px;
    height: 100%;
    margin: -20px 0 50px;
    width: 100%;
    text-align: center;
    /* background: linear-gradient(315deg, #ffffff, #d7e1ec); */
  }
  
  h1 {
    font-weight: bold;
    margin: 0;
  }
  
  
  
  p {
    font-size: 14px;
    /* font-weight: 100; */
    line-height: 20px;
    letter-spacing: 0.5px;
    margin: 20px 0 30px;
  }
  
  span {
    font-size: 12px;
  }
  
  /* a {
    color: #333;
    font-size: 14px;
    text-decoration: none;
    margin: 15px 0;
  } */
  
  .container {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    position: relative;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
  }
  
  .form-container form {
    background: #fff;
    display: flex;
    flex-direction: column;
    padding: 0 50px;
    height: 100%;
    justify-content: center;
    align-items: center;
    text-align: center;
  }
  
  .social-container {
    margin: 20px 0;
  }
  
  .social-container a {
    border: 1px solid #ddd;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 5px;
    height: 40px;
    width: 40px;
  }
  
  .form-container input {
    background: #eee;
    border: none;
    padding: 12px 15px;
    margin: 8px 0;
    width: 100%;
  }
  
  button {
    border-radius: 20px;
    /* border: 1px solid #ff4b2b; */
    background: #3b06fa;
    color: #fff;
    font-size: 12px;
    font-weight: bold;
    padding: 12px 45px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: transform 80ms ease-in;
    
    box-shadow:1px 1px 3px #3b06fa;
  }
  
  button:active {
    transform: scale(0.95);
  }
  
  button:focus {
    outline: none;
  }
  
  button.ghost {
    background: transparent;
    border-color: #fff;
  }
  
  .form-container {
    position: absolute;
    top: 0;
    height: 100%;
    transition: all 0.6s ease-in-out;
  }
  
  .sign-in-container {
    left: 0;
    width: 50%;
    z-index: 2;
  }
  
  .sign-up-container {
    left: 0;
    width: 50%;
    opacity: 0;
    z-index: 1;
  }
  
  .overlay-container {
    position: absolute;
    top: 0;
    left: 50%;
    width: 50%;
    height: 100%;
    overflow: hidden;
    transition: transform 0.6s ease-in-out;
    z-index: 100;
  }
  
  .overlay {
    /* background: #ff416c; */
    /* background: linear-gradient(to right, #ff4b2b, #ff416c) no-repeat 0 0 / cover; */
    background-image: linear-gradient(45deg, #3b06fa 0%, #f0eaf7 100%);
    color: #fff;
    position: relative;
    left: -100%;
    height: 100%;
    width: 200%;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
  }
  
  .overlay-panel {
    position: absolute;
    top: 0;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 0 40px;
    height: 100%;
    width: 50%;
    text-align: center;
    transform: translateX(0);
    transition: transform 0.6s ease-in-out;
  }
  
  .overlay-right {
    right: 0;
    transform: translateX(0);
  }
  
  .overlay-left {
    transform: translateX(-20%);
  }
  
  /* Animations */
  
  /* Move sign in to the right */
  .container.right-panel-active .sign-in-container {
    transform: translateX(100%);
  }
  
  /* Move overlay to the left */
  .container.right-panel-active .overlay-container {
    transform: translateX(-100%);
  }
  
  /* Bring sign up over sign in */
  .container.right-panel-active .sign-up-container {
    transform: translateX(100%);
    opacity: 1;
    z-index: 5;
  }
  
  /* Move overlay back to the right */
  .container.right-panel-active .overlay {
    transform: translateX(50%);
  }
  
  .container.right-panel-active .overlay-left {
    transform: translateX(0);
  }
  
  .container.right-panel-active .overlay-right {
    transform: translateX(20%);
  }
  
  /* for sign in ************************************** */
  
  /* @import url("https://fonts.googleapis.com/css2?family=Poppins&display=swap"); */
  
  
  
  
  
  
  
  .wrapper {
    display: inline-flex;
  }
  
   .icon {
    position: relative;
    background-color: #ffffff;
    border-radius: 50%;
    padding: 15px;
    margin: 10px;
    width: 50px;
    height: 50px;
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  
   .tooltip {
    position: absolute;
    top: 0;
    font-size: 14px;
    background-color: #ffffff;
    color: #ffffff;
    padding: 5px 8px;
    border-radius: 5px;
    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
    opacity: 0;
    pointer-events: none;
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  
   .tooltip::before {
    position: absolute;
    content: "";
    height: 8px;
    width: 8px;
    background-color: #ffffff;
    bottom: -3px;
    left: 50%;
    transform: translate(-50%) rotate(45deg);
    transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
  }
  
   .icon:hover .tooltip {
    top: -45px;
    opacity: 1;
    visibility: visible;
    pointer-events: auto;
  }
  
   .icon:hover span,
   .icon:hover .tooltip {
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
  }
  
   .facebook:hover,
   .facebook:hover .tooltip,
   .facebook:hover .tooltip::before {
    background-color: #3b5999;
    color: #ffffff;
  }
  
  
  
   .instagram:hover,
   .instagram:hover .tooltip,
   .instagram:hover .tooltip::before {
    background-color: #e1306c;
    color: #ffffff;
  }
  
  
  
   .youtube:hover,
   .youtube:hover .tooltip,
   .youtube:hover .tooltip::before {
    background-color: #de463b;
    color: #ffffff;
  }
  .whatsapp:hover,
   .whatsapp:hover .tooltip,
   .whatsapp:hover .tooltip::before {
    background-color: green;
    color: #ffffff;
  }
  /* //////////////////////////////////////////////////////////////////// */
  
  /* //////////////////////////////////////////////////////////////////// */
</style>


    <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>
</head>
<body>





    <!-- Main Container -->
<div id="container" class="container">

    <!-- Sign Up Form Container -->
    <div class="form-container sign-up-container">
  
      <!-- Sign Up Form -->
      <form  method="post" enctype="multipart/form-data">
        <h1>Create Account</h1>
        
        <div class="wrapper">
          <div class="icon facebook" onclick="facebook();">
            <div class="tooltip">Facebook</div>
            <span><i class="fab fa-facebook-f"></i></span>
          </div>
          <div class="icon instagram" onclick="instagram()">
            <div class="tooltip">Instagram</div>
            <span><i class="fab fa-instagram"></i></span>
          </div>
          
          <div class="icon youtube" onclick="youtube()">
            <div class="tooltip">Youtube</div>
            <span><i class="fab fa-youtube"></i></span>
          </div>

          <div class="icon whatsapp" onclick="whatsapp();">
            <div class="tooltip">WhatsApp</div>
            <span><i class="fab fa-whatsapp"></i></span>
          </div>
        </div>

        <span>or user your email for registration</span>
        <input type="text" name="name" placeholder="First and Last Name" required/>
        <input type="email" name="email" placeholder="Email" required/>
        <input type="password" name="password" placeholder="Password" required/>
         <!-- <label for="file">Profile Image:</label>  -->
         Profile Image:<input type='file' name="files" required>
        
        <button name="signup">Sign Up</button>
      </form>
      <!-- End Sign Up Form -->
  
    </div>
    <!-- End Sign Up Form Container -->
  
    <!-- Sign In Form -->
    <div class="form-container sign-in-container">
      <form  method="post">
        <h1>Sign In</h1>
        <div class="wrapper">
          <div class="icon facebook" onclick="facebook();">
            <div class="tooltip">Facebook</div>
            <span><i class="fab fa-facebook-f"></i></span>
          </div>
          
          <div class="icon instagram" onclick="instagram()">
            <div class="tooltip">Instagram</div>
            <span><i class="fab fa-instagram"></i></span>
          </div>
          
          <div class="icon youtube" onclick="youtube()">
            <div class="tooltip">Youtube</div>
            <span><i class="fab fa-youtube"></i></span>
          </div>
          <div class="icon whatsapp" onclick="whatsapp();">
            <div class="tooltip">WhatsApp</div>
            <span><i class="fab fa-whatsapp"></i></span>
          </div>
        </div>

        <span>or use your account</span>
        <input type="email" placeholder="Email" name="emailSignIn" required/>
        <input type="password" placeholder="Password" name="passwordSginIn" required/>
        <button name="signIn" >Sign In</button>
        
      </form>
    </div>
    <!-- End Sign In Form -->
    
    <!-- Form Overlay -->
    <div class="overlay-container">
      <div class="overlay">
        
        <!-- Sign In Overlay -->
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us plase login with your personal info.</p>
          <button id="signIn" class="ghost">
            Sign In
          </button>
        </div>
        <!-- End Sign In Overlay -->
        
        <!-- Sign Up Overlay -->
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start your journey with us.</p>
          <button id="signUp" class="ghost">
            Sign Up
          </button>
        </div>
        <!-- End Sign Up Overlay -->
        
      </div>
    </div>
    <!-- End Form Overlay -->
    
  </div>
  <!-- End Main Container -->
<script>

const signUpButton = document.getElementById('signUp');

const signInButton = document.getElementById('signIn');

const container = document.getElementById('container');

signUpButton.addEventListener('click', () => container.classList.add('right-panel-active'));

signInButton.addEventListener('click', () => container.classList.remove('right-panel-active'));

// document.getElementById("input_btn-profile")
// .addEventListener('click',function(){
//   document.getElementById("input_file-profile").click();  
// },false);


</script>

<script>
  function whatsapp(){
    window.open('https://web.whatsapp.com/send?phone=96178956551&text=Welcom%20in%20Royal%20Brand%20Start%20Chat%20With%20Us', '_blank');
    

  }

  function facebook(){
    window.open('https://www.facebook.com/ali.zaitoon.75', '_blank');
    

  }
  function instagram(){
    // window.open('https://www.facebook.com/ali.zaitoon.75', '_blank');
  }

  function youtube(){
    // window.open('https://www.facebook.com/ali.zaitoon.75', '_blank');
    

  }
  
</script>
</body>
</html>