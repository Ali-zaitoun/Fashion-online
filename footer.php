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
        
footer { width:100%; background-image: -webkit-linear-gradient(45deg,#3b06fa 0%, #f0eaf7  100%); min-height:250px; padding:10px 0px 25px 0px ;}

footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}


.fleft { float:left;}
.padding-right { padding-right:10px; }

.socialFooter {margin:0px; list-style-type:none; padding:0px;}
.socialFooter li p { display:table; }
.socialFooter li a:hover { text-decoration:none;}
.socialFooter li i { margin-top:5px;}


.foote_bottom_ul_amrc {
	list-style-type:none;
	padding:0px;
	display:table;
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline; }
.foote_bottom_ul_amrc li a { margin:0 12px; color: white;}
.colorWhite{
  color: white;
}

/* ---------------------------------------------------------------- */
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
  /* ******************************************************** */


    </style>
       <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>

</head>
  <body>
    <footer class="footer bg-primary mt-3" >
      <div class="container ">
        
        <div class="row">
          <div style="padding-top:0px;margin-bottom:0px; " class="col-lg-4 col-md-8 col-sm-12 d-flex align-items-center  text-center ">
            <!-- <img src="img/royal brand.PNG" alt="" style="border-radius: 30px; " class="w-100"> -->
            <h1   style="color: white; font-family:Brush Script MT, Brush Script Std, cursive !important;   text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue; font-size:80px"><i> Royal <br> Brand</i></h1>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-6 " style="padding-left: 50px;">
            <h5  style="color: white; padding-top:40px ; margin-bottom:20px ;">Find us</h5>
            
            <p style="padding-bottom:15px;" class="colorWhite">Online shopping is a form of electronic commerce which allows consumers to directly buy goods or services from a seller  over the Internet using a web browser.</p>
            <p class="colorWhite"><i class="fa fa-map-marker " style="color:blue;"></i> Sawiri, West Bekaa Libanon  </p>
            <p class="colorWhite"><i class="fa fa-phone" style="color:blue;"></i>  +961/78956551  </p>
            <p class="colorWhite"><i class="fa fa fa-envelope" style="color:blue;"></i> RoyalBrand2021@gmail.com</p>
            
          
          </div>
          <div class="col-lg-4  col-md-12 col-sm-6 text-center">
            <h5  style="color: white; padding-top:40px ; margin-bottom:20px ;">Follow us</h5>
            <div class="wrapper">
          <div class="icon facebook"onclick="facebook();">
            <div class="tooltip">Facebook</div>
            <span><i class="fab fa-facebook-f"></i></span>
          </div>
          <div class="icon instagram"onclick="instagram()">
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
        
          </div>
        </div>
      </div>
      <hr style="background-color: white;">
      
      <div class="container">
      <ul class="foote_bottom_ul_amrc">
      <li><a href="index.php">Home</a></li>
      <li><a href="manshirt.php">Men</a></li>
      <li><a href="womanshirt.php">Woman</a></li>
      <li><a href="shirtkids.php">Kids</a></li>
      <li><a href="AboutUs.php">About</a></li>

      <li><a href="ContactUs.php">Contact</a></li>
      </ul>
      <p class="text-center colorWhite" >Copyright @2021 | Designed With by <a href="#"><b style="color:darkblue;"> Ali Zaitoun && Ashraf Abo Hamdan </b></a></p>
      </div>
      </footer>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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