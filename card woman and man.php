<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .containerphoto {
   width: 100vw;
   max-height: 800px;
   max-width: 100%;
   padding-top: 30px;
   padding-bottom: 50px;
   display: flex;
   justify-content: space-around;
   align-items: center;
   margin: 0 auto;
 }
 .border1 {
   height: 369px;
   width: 290px;
   background: transparent;
   border-radius: 10px;
   transition: border 1s;
   position: relative;
 }
 .border1:hover {
   border: 1px solid #fff;
 }
 .card50 {
   height: 379px;
   width: 300px;
   background: #808080;
   border-radius: 10px;
   transition: background 0.8s;
   overflow: hidden;
   background: #000;
   box-shadow: 0 70px 63px -60px #000;
   display: flex;
   justify-content: center;
   align-items: center;
   position: relative;
 }
 .card0 {
   background: url("img/man7.jpg") center center no-repeat;
   background-size: 300px;
 }
 .card0:hover {
   background: url("img/man7.jpg") left center no-repeat;
   background-size: 500px;
 }
 .card0:hover h2 {
   opacity: 1;
 }
 .card0:hover  {
   opacity: 1;
   cursor: pointer;
 }
 .card1 {
   
   background: url("img/woman3.jpg") center center no-repeat;
   background-size: 300px;
 }
 .card1:hover {
   background: url("img/woman3.jpg") left center no-repeat;
   background-size: 600px;
 }
 .card1:hover h2 {
   opacity: 1;
 }
 .card1:hover {
   opacity: 1;
   cursor: pointer;
 }
 .card2 {
   background: url("img/kids1.jpg") center center no-repeat;
   background-size: 300px;
 }
 .card2:hover {
   background: url("img/kids1.jpg") left center no-repeat;
   background-size: 600px;
 }
 .card2:hover h2 {
   opacity: 1;
 }
 .card2:hover  {
   opacity: 1;
   cursor: pointer;
 }
 h2 {
   font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
   color: #fff;
   margin: 20px;
   opacity: 0;
   transition: opacity 1s;
 }
 
 @media  (max-width:700px) {
  
   .card0:hover {
   background: url("img/man7.jpg") left center no-repeat;
   background-size: 300px;
 }

   .card1:hover {
   background: url("img/woman3.jpg") left center no-repeat;
   background-size: 300px;
 }
 .card2:hover {
   background: url("img/kids1.jpg") left center no-repeat;
   background-size: 300px;
 }
 }
    </style>
</head>
<body>
    <div class="containerphoto">
      
        <div class="card50 card0">
          
          <!-- <a href="#"> -->
          <div class="border1" onclick="document.location='footer.php';return false;">
            <h2>Men's</h2>
          </div>
        <!-- </a> -->
        
        </div>
        <div class="card50 card1" onclick="document.location='footer.php';return false;">
          <!-- <a href=""> -->
          <div class="border1">
            <h2>Woman's</h2>
          </div>
        <!-- </a> -->
        </div>
        <div class="card50 card2" onclick="document.location='footer.php';return false;">
          <!-- <a href="" > -->
          <div class="border1">
            <h2>Kid's</h2> 
          </div>
        <!-- </a> -->
        </div>
      </div> 

      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>


</body>
</html>