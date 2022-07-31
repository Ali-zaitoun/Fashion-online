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
.card-container {
  height: 400px;
  width: 300px;
  border-radius: 10px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  background: #fafafa;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.45);
}

.card-title {
  opacity: 0;
  position: absolute;
  bottom: 18px;
  left: 30px;
  color: #2f3640;
  font-family: Montserrat;
  font-size: 26px;
  font-weight: normal;
  color: #4f4f4f;
  transition: ease-in-out 0.5s;
  animation: slide-out-left 0.7s;
}

.card-price {
  opacity: 0;
  position: absolute;
  top: 20px;
  right: 20px;
  font-family: "Roboto", sans-serif;
  font-size: 20px;
  font-weight: bold;
  color: #4f4f4f;
  transition: ease-in-out 0.5s;
  animation: slide-out-right 0.7s;
}

.card-price > .currency {
  position: absolute;
  font-size: 12px;
  top: 2px;
  left: -8px;
}

.card-container:hover .card-price {
  opacity: 1;
  animation: slide-in-right 0.4s;
  transition: opacity ease-out 1s;
}

.card-container:hover .card-title {
  opacity: 1;
  animation: slide-in-left 0.4s;
  transition: opacity ease-out 1s;
}

.card-container:hover .cart-btn {
  opacity: 1;
  animation: slide-in-right-bottom 0.4s;
  transition: ease-in-out 0.3s, opacity 1.2s;
}

.card-container:hover img {
  transform: scale(0.6);
}

.card-image-container {
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  margin: 0 auto;
}

.card-image-container > img {
  display: block;
  margin: 0 auto;
  max-width: 100%;
  height: 100%;
  object-fit: contain;
  transform: scale(0.8);
  transition: ease-in-out 0.3s;
}

.cart-btn {
  opacity: 0;
  position: absolute;
  display: inline-block;
  right: 0;
  bottom: 0;
  padding: 35px 20px 20px 30px;
  border-top-left-radius: 80px;
  border-bottom-right-radius: 10px;
  font-size: 30px;
  color: #bdbdbd;
  background: #4f4f4f;
  box-shadow: inset 5px 5px 10px rgba(0, 0, 0, 0.25);
  transition: ease-in-out 0.3s;
  animation: slide-out-right-bottom 0.7s;
}

.cart-btn:hover {
  cursor: pointer;
  color: lightblue;
}

@media (max-width: 1040px) {
  
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 730px) {
  

  

  .grid {
    grid-template-columns: repeat(1, 1fr);
  }
}

@keyframes slide-in-left {
  0% {
    transform: translate3d(-300px, 0, 0);
  }
  20% {
    transform: translate3d(-300px, 0, 0);
  }
  100% {
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slide-out-left {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(-300px, 0, 0);
  }
}

@keyframes slide-in-right {
  0% {
    transform: translate3d(300px, 0, 0);
  }
  20% {
    transform: translate3d(300px, 0, 0);
  }
  100% {
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slide-out-right {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(300px, 0, 0);
  }
}

@keyframes slide-in-right-bottom {
  0% {
    transform: translate3d(300px, 300px, 0);
  }
  20% {
    transform: translate3d(300px, 300px, 0);
  }
  100% {
    transform: translate3d(0, 0, 0);
  }
}

@keyframes slide-out-right-bottom {
  0% {
    transform: translate3d(0, 0, 0);
  }
  100% {
    transform: translate3d(300px, 300px, 0);
  }
}
    
    </style>
    <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>  
</head>
  <body>

  <div class="container">

<div class="text-center pt-2">
    <h3 class="font-weight-bold ">Overview Men Products</h3>
  </div>
    <hr>

<div id="carouselExampleIndicators7" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="background-color: blue;"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color: blue;"></li>
  
</ol>
<div class="carousel-inner">
  <div class="carousel-item active" style="margin-top: 13px; margin-bottom: 13px;">
    <div class="d-flex justify-content-around">

        <div class="card-container">
          <h2 class="card-price"><span class="currency">$</span>25</h2>
          <h1 class="card-title">Shirt</h1>
          <div class="card-image-container">
            <img src="img men carusal/shirt.png" alt="" />
          </div>
          <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="manshirt.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
          
        </div>
    
    

        <div class="card-container">
          <h2 class="card-price"><span class="currency">$</span>30</h2>
          <h1 class="card-title">T-shirt</h1>
          <div class="card-image-container">
            <img src="img men carusal/shirt1.png" alt="" />
          </div>
          <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="manshirt.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
        </div>
    
    

        <div class="card-container">
          <h2 class="card-price"><span class="currency">$</span>30</h2>
          <h1 class="card-title">T-shirt</h1>
          <div class="card-image-container">
            <img src="img men carusal/shirt2.png" alt="" />
          </div>
          <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="manshirt.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
        </div>
    
    </div>
  </div>
  <div class="carousel-item" style="margin-top: 13px; margin-bottom: 13px;">
    <div class="d-flex justify-content-around">

        <div class="card-container">
          <h2 class="card-price"><span class="currency">$</span>40</h2>
          <h1 class="card-title">jeans</h1>
          <div class="card-image-container">
            <img src="img men carusal/pants.png" alt="" />
          </div>
          <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="manpants.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
        </div>
    
    

        <div class="card-container">
          <h2 class="card-price"><span class="currency">$</span>1200</h2>
          <h1 class="card-title">Shoes</h1>
          <div class="card-image-container">
            <img src="img men carusal/shoes.png" alt="" />
          </div>
          <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="manshoes.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
        </div>
    
    

        <div class="card-container">
          <h2 class="card-price"><span class="currency">$</span>190</h2>
          <h1 class="card-title">Men's Accessories</h1>
          <div class="card-image-container">
            <img src="img men carusal/Accessories.png" alt="" />
          </div>
          <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="manaccess.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
        </div>
    
    </div>
  </div>
  
</div>


<a class="carousel-control-prev"  href="#carouselExampleIndicators7" role="button" data-slide="prev" style="width: 5%;">
    <i class="bi bi-caret-left-fill " ></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
      <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
    </svg>
    <span class="sr-only" >Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators7" role="button" data-slide="next" style="width: 5%;">
    <i class="bi bi-caret-right-fill " ></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
      <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
    </svg>
    <span class="sr-only">Next</span>
  </a>
</div>  
</div>


<div class="container">
      <hr>
      <div class="text-center">
          <h3 class="font-weight-bold ">Overview Woman Products</h3>
        </div>
          <hr>

  <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active" style="background-color: blue;"></li>
        <li data-target="#carouselExampleIndicators2" data-slide-to="1" style="background-color: blue;"></li>
        
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="margin-top: 13px; margin-bottom: 13px;">
          <div class="d-flex justify-content-around">

              <div class="card-container">
                <h2 class="card-price"><span class="currency">$</span>200</h2>
                <h1 class="card-title">Dress</h1>
                <div class="card-image-container">
                  <img src="img women carusal/dress.png" alt="" />
                </div>
                <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="womanshirt.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
              </div>
          
          

              <div class="card-container">
                <h2 class="card-price"><span class="currency">$</span>190</h2>
                <h1 class="card-title">Dress</h1>
                <div class="card-image-container">
                  <img src="img women carusal/dress1.png" alt="" />
                </div>
                <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="womanshirt.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
              </div>
          
          

              <div class="card-container">
                <h2 class="card-price"><span class="currency">$</span>140</h2>
                <h1 class="card-title">Skirt</h1>
                <div class="card-image-container">
                  <img src="img women carusal/skirt.png" alt="" />
                </div>
                <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="womenpants.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
              </div>
          
          </div>
        </div>
        <div class="carousel-item" style="margin-top: 13px; margin-bottom: 13px;">
          <div class="d-flex justify-content-around">

              <div class="card-container">
                <h2 class="card-price"><span class="currency">$</span>100</h2>
                <h1 class="card-title">sweater</h1>
                <div class="card-image-container">
                  <img src="img women carusal/sweater.png" alt="" />
                </div>
                <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="womanshirt.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
              </div>
          
          

              <div class="card-container">
                <h2 class="card-price"><span class="currency">$</span>1200</h2>
                <h1 class="card-title">Shoes</h1>
                <div class="card-image-container">
                  <img src="img women carusal/shoes.png" alt="" />
                </div>
                <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="shoeswomen.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
              </div>
          
          

              <div class="card-container">
                <h2 class="card-price"><span class="currency">$</span>1200</h2>
                <h1 class="card-title">Accessories</h1>
                <div class="card-image-container">
                  <img src="img women carusal/Accessories.png" alt="" />
                </div>
                <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="womanaccess.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
              </div>
          
          </div>
        </div>
        
      </div>
      

      <a class="carousel-control-prev"  href="#carouselExampleIndicators2" role="button" data-slide="prev" style="width: 5%;">
          <i class="bi bi-caret-left-fill " ></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
            <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
          </svg>
          <span class="sr-only" >Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next" style="width: 5%;">
          <i class="bi bi-caret-right-fill" ></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
          </svg>
          <span class="sr-only">Next</span>
        </a>
    </div>  
  </div>


  <div class="container">
    <hr>
    <div class="text-center">
        <h3 class="font-weight-bold ">Overview Kids Products</h3>
      </div>
        <hr>

<div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active" style="background-color: blue;"></li>
      <li data-target="#carouselExampleIndicators3" data-slide-to="1" style="background-color: blue;"></li>
      <li data-target="#carouselExampleIndicators3" data-slide-to="2" style="background-color: blue;"></li>
      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active" style="margin-top: 13px; margin-bottom: 13px;">
        <div class="d-flex justify-content-around">

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>150</h2>
              <h1 class="card-title">Dress</h1>
              <div class="card-image-container">
                <img src="img kids carusal/dress.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="shirtkids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>90</h2>
              <h1 class="card-title">Dress</h1>
              <div class="card-image-container">
                <img src="img kids carusal/dress1.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="shirtkids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>100</h2>
              <h1 class="card-title">Jacket</h1>
              <div class="card-image-container">
                <img src="img kids carusal/jacket.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="shirtkids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        </div>
      </div>
      <div class="carousel-item" style="margin-top: 13px; margin-bottom: 13px;">
        <div class="d-flex justify-content-around">

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>50</h2>
              <h1 class="card-title">Jacket</h1>
              <div class="card-image-container">
                <img src="img kids carusal/jacket1.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="shirtkids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>1200</h2>
              <h1 class="card-title">Scarf</h1>
              <div class="card-image-container">
                <img src="img kids carusal/scarf.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="accesskids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>30</h2>
              <h1 class="card-title">Shirt</h1>
              <div class="card-image-container">
                <img src="img kids carusal/shirt.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="shirtkids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        </div>
      </div>

      <div class="carousel-item" style="margin-top: 13px; margin-bottom: 13px;">
        <div class="d-flex justify-content-around">

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>140</h2>
              <h1 class="card-title">Shoes</h1>
              <div class="card-image-container">
                <img src="img kids carusal/shoes.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="shoeskids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>150</h2>
              <h1 class="card-title">Shoes</h1>
              <div class="card-image-container">
                <img src="img kids carusal/shoes1.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="shoeskids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        

            <div class="card-container">
              <h2 class="card-price"><span class="currency">$</span>1200</h2>
              <h1 class="card-title">Bracelete</h1>
              <div class="card-image-container">
                <img src="img kids carusal/bracelete.png" alt="" />
              </div>
              <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<a href="accesskids.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          }else{
            echo '<a href="login/login form.php"><i class="fas fa-cart-plus cart-btn" ></i></a>';
          } 
          ?>
            </div>
        
        </div>
      </div>
      
    </div>
    

    <a class="carousel-control-prev"  href="#carouselExampleIndicators3" role="button" data-slide="prev" style="width: 5%;">
        <i class="bi bi-caret-left-fill " ></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
          <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/>
        </svg>
        <span class="sr-only" >Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next" style="width: 5%;">
        <i class="bi bi-caret-right-fill" ></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="blue" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
          <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
        </svg>
        <span class="sr-only">Next</span>
      </a>
  </div>  
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>