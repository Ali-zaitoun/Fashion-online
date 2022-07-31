<?php
 require 'db.php';

$sql=$database->prepare("SELECT * FROM loginpage where email=:email");
$sql->bindParam("email",$_COOKIE['emailfromlogin']);
$sql->execute();
$sql1=$sql->fetchObject();
if(isset($_POST["submit"])){



 $name = $_POST["name"];
 $subject = $_POST["subject"];
 $message = $_POST["message"];


$inserttocontact=$database->prepare("INSERT INTO `contactus`( `name`, `subject`, `massage`,email) VALUES (:name,:subject,:message,:email)");
$inserttocontact->bindParam("name",$name);
$inserttocontact->bindParam("subject",$subject);
$inserttocontact->bindParam("message",$message);
$inserttocontact->bindParam("email",$_COOKIE['emailfromlogin']);

$inserttocontact->execute();
}
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <title>Contact Us</title>
    <!-- <link rel="stylesheet" href="style.css">
    !-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <?php include "header.php"?>
  
  <div class="container container11 mt-3 mb-3">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">sham, highway</div>
          <div class="text-two">first, floor</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+00961 71 933 734</div>
          <div class="text-two">+00961 78 956 551</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">ashrafbusiness@hotmail.com</div>
          <div class="text-two">ali.zaitoun@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any question, you can send me message from here. It's my pleasure to help you.</p>
    
       
        
</head>




<!-- Start code for the form-->
<form method="post">
	<p>
		<label for='name'>Enter Name: </label><br>
		<input type="text" name="name">
	</p>
	<p>
		<label for='email'>Subject</label><br>
		<input type="text" name="subject">
	</p>
	<p>
		<label for='message'>Enter Message:</label> <br>
		<textarea name="message"></textarea>
	</p>
	<input type="submit" class="btn " style="color: #3e2093; border: 1px solid #3e2093" name='submit' value="Submit">
</form>




        
      
    </div>
    
    </div>
    


  </div>
  <?php include "desplayquestion.php";?>
  <footer><?php include "footer.php"?></footer>
 
  
  
  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 
</body>
</html>
