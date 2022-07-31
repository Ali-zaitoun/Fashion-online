<?php 
 require 'db.php';

if(isset($_POST['logout'])){
  if(isset($_COOKIE['emailfromlogin'])){
    setcookie("emailfromlogin","",time() - 3600,"/");
    header('location: login/login form.php');
  }
}
?>







    <style>
        .mobile-menu {
  position: fixed;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  transform: translateX(-100%);
  opacity: 0;
  z-index: 999;
  transition: all 0.5s;
}
.mobile-menu.show {
  opacity: 1;
  transform: translateX(0);
}
.mobile-menu .after {
  position: absolute;
  top: 0;
  right: 0;
  width: calc(100% - 280px);
  height: 100%;
}
.mobile-menu .main-menu {
  overflow-y: auto;
  height: 100%;
  width: 280px;
  background-color: #ffffff;
  padding: 30px 15px;
}
.mobile-menu .btn-close {
  padding: 0 0;
}
.mobile-menu .btn-close:hover i {
  color: blue;
}
.mobile-menu .btn-close i {
  font-size: 24px;
  height: 24px;
  display: block;
  color: #666666;
  transition: all 0.3s;
}
.mobile-menu .nav .nav-item {
  width: 100%;
}
.mobile-menu .nav .nav-item .nav-link {
  font-size: 15px;
  font-weight: 500;
  color: #666666;
  display: flex;
  align-items: center;
  padding: 12px 0;
  cursor: pointer;
  position: relative;
}
/* .mobile-menu .nav .nav-item .nav-link:before  {
  position: absolute;
  content: "";
  bottom: 0;
  right: 0;
  width: 100%;
  height: 2px;
  background-color: #000;
  opacity: 0.2;
} */

.header {
  position: relative;
  background-size: cover;
  background-position: center;
}
.header:before {
  position: absolute;
  content: "";
   
  background-image: -webkit-linear-gradient(45deg, #f0eaf7 0%, #3b06fa 100%);
  
  opacity: 0.902; 
  width: 100%;
  height: 100%;
  top: 0;
  right: 0;
}
.header .top-bar {
  padding: 20px 0;
  z-index: 9;
  position: relative;
}
.header .top-bar .brand {
  display: inline-block;
  max-height: 40px;
  max-width: 200px;
}
.header .top-bar .brand img {
  width: 100%;
  height: 100%;
}
.header .top-bar .nav-menu:hover .nav-item .nav-link {
  opacity: 0.5;
}
.header .top-bar .nav-menu .nav-item {
  position: relative;
}
.header .top-bar .nav-menu .nav-item:before {
  position: absolute;
  content: "";
  top: 50%;
  left: 0;
  width: 2px;
  height: 20px;
  background-color: #fff;
  opacity: 0.5;
  transform: translateX(-50%) translateY(-50%);
}
.header .top-bar .nav-menu .nav-item:first-child:before {
  display: none;
}
.header .top-bar .nav-menu .nav-item .nav-link {
  font-size: 16px;
  color: #fff;
  font-weight: 300;
  padding: 5px 20px;
  transition: all 0.3s;
}
.header .top-bar .nav-menu .nav-item .nav-link:hover {
  opacity: 1;
}
.header .top-bar .login {
  display: block;
}
.header .top-bar .login i {
  font-size: 24px;
  height: 24px;
  color: #fff;
}
.header .top-bar .btn-menu {
  padding: 0;
  margin: 0 0 0 14px;
  display: none;
  position: relative;
}
.header .top-bar .btn-menu i {
  font-size: 24px;
  height: 24px;
  color: #fff;
}

/* MAX WIDTH 992 */
@media screen and (max-width: 992px) {
  .header .top-bar {
    padding: 50px 0;
  }
  .header .top-bar .brand {
    margin-left: auto;
  }
  .header .top-bar .brand img {
    max-height: 35px;
  }
  .header .top-bar .nav-menu {
    display: none;
  }
  .header .top-bar .login {
    display: block;
    margin-left: auto;
  }
  .header .top-bar .login i {
    font-size: 22px;
    height: 22px;
  }
  .header .top-bar .btn-menu {
    display: block;
    background-color: transparent;
    border: none;
  }
  .header .top-bar .btn-menu i {
    font-size: 22px;
    height: 22px;
  }
}
.searchCircle
{
  position : relative;
  top : 50%;
  left : 50%;
  transform : translate(-50%,-50%);
  
  /* height : 40px; */
  border-radius : 40px;
  padding-left : 10px;
}
.searchButton
{
  color : #4097FF;
  float : right;
  width : 40px;
  height : 40px;
  border-radius: 50%;
  background : #fff;
  display:flex;
  justify-content: center;
  align-items: center;
  text-decoration: none;
  transition:0.4s;
}
.searchText
{
  border:none;
  background:none;
  outline:none;
  float:left;
  padding:0;
  color: #fff;
  font-size:16px;
  transition : 0.4s;
  line-height: 40px;
  width : 0px;
}
.searchCircle:hover > .searchText
{
  width: 240px;
  padding: 0 6px;
}
.searchCircle:hover > .searchButton
{
 background:white;
}
.searchText::placeholder{
  color: #fff;
}

/*strat header */
/* dropdown */
.dropbtn {
  background-color: none;
  border: none;
  
  
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color: #7898f1;
  text-decoration: none;
  color:white;
}

.dropdown:hover .dropdown-content {
  display: block;
  animation: growDown 300ms ease-in-out forwards;
  transform-origin: top center;
}

.dropdown:hover .dropbtn {
  background-color: white;
}

@keyframes growDown {
  0% {
    transform: scaleY(0);
  }
  80% {
    transform: scaleY(1.1);
  }
  100% {
    transform: scaleY(1);
  }
}
/* -------------------------------------------------------------------------------------- */


.sidenav111 {
  height: 100%;
  width: 100%;
  
  
  
 
}

.sidenav111 a, .dropdown-btn111 {

  text-decoration: none;
  
  color: #666666;
  font-weight: 500;
  display: block;
  border: none;
  background: none;

  padding-left: 0px;
  
  cursor: pointer;
  outline: none;
  padding-bottom: 12px;
    padding-top: 12px;
}

.dropdown-container111 {
  display: none;
  
  
}
/* 22 */
.sidenav112 {
  height: 100%;
  width: 100%;
  
  
  
}

.sidenav112 a, .dropdown-btn112 {
  text-decoration: none;
  
  color: #666666;
  font-weight: 500;
  display: block;
  border: none;
  background: none;

  padding-left: 0px;
  
  cursor: pointer;
  outline: none;
  padding-bottom: 12px;
    padding-top: 12px;
}

.dropdown-container112 {
  display: none;
  
  
}
/* 33 */
.sidenav113 {
  height: 100%;
  width: 100%;
}

.sidenav113 a, .dropdown-btn113 {
  text-decoration: none;
  color: #666666;
  font-weight: 500;
  display: block;
  border: none;
  background: none;
  padding-left: 0px;
  cursor: pointer;
  outline: none;
  padding-bottom: 12px;
    padding-top: 12px;
}

.dropdown-container113 {
  display: none;
  
  
}

@media only screen and (max-width: 992px) {
  .dropdown {
    margin-left: 75%;
  }
  
}
@media only screen and (max-width: 768px) {
  .dropdown {
    margin-left: 60%;
  }
}

@media only screen and (max-width: 500px) {
  .dropdown {
    margin-left: 55%;
  }

  
}

/* .dropdown-toggle::after{
  vertical-align: 0.1em;
} */

    </style>
    <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>
    
</head>
<body>

    
    <div class="mobile-menu">
        <div class="main-menu">
            <div class="d-flex justify-content-end">
                <button class="btn btn-close">
                 <i class="fas fa-times"></i>
                </button>

            </div>
            <ul class="nav">
            <li class="nav-item ">
                <a href="index.php" class="nav-link">
                    Home 
                  </a>
            <hr class="my-0" style="border: 1px solid black;background-color:black">
            </li>
            
            <li class="nav-item ">
              <div class="sidenav111" >
                <button class="dropdown-btn111" style="outline:none;">Men
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container111" style="padding-left:20px ;">
                      <a href="manshirt.php">T-shirt</a>
                      <hr class="my-0">
                      <a href="manpants.php">pants</a>
                      <hr class="my-0">
                      <a href="manshoes.php">shoes</a>
                      <hr class="my-0">
                      <a href="manaccess.php">Accessory</a>
                </div>
                <hr class="my-0" style="border: 1px solid black;background-color:black;">
              </div>
            </li>
           
            <li class="nav-item ">
              <div class="sidenav112">
                <button class="dropdown-btn112" style="outline:none;">Women 
                <i class="fa fa-caret-down" ></i>
                </button>
                  <div class="dropdown-container112" style="padding-left:20px ;">
                  <a href="womanshirt.php">T-shirt</a>
                      <hr class="my-0">
                      <a href="womenpants.php">pants</a>
                      <hr class="my-0">
                      <a href="shoeswomen.php">shoes</a>
                      <hr class="my-0">
                      <a href="womanaccess.php">Accessory</a>
                  </div>
                  <hr class="my-0" style="border: 1px solid black;background-color:black">
              </div>
            </li>

            <li class="nav-item ">
              <div class="sidenav113">
                <button class="dropdown-btn113" style="outline:none;">Kids 
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container113" style="padding-left:20px ;">
                      <a href="shirtkids.php">T-shirt</a>
                      <hr class="my-0">
                      <a href="pantskids.php">pants</a>
                      <hr class="my-0">
                      <a href="shoeskids.php">shoes</a>
                      <hr class="my-0">
                      <a href="accesskids.php">Accessory</a>
                </div>
                <hr class="my-0" style="border: 1px solid black;background-color:black">
              </div>
            </li>
            

            <li class="nav-item ">
              <a href="AboutUs.php" class="nav-link">
                  About us
              </a>
            <hr class="my-0" style="border: 1px solid black;background-color:black">
          </li>
          <li class="nav-item ">
            <a href="ContactUs.php" class="nav-link">
                Contact us
            </a>
            <hr class="my-0" style="border: 1px solid black;background-color:black">
        </li>
        <li class="nav-item">
          <?php
          if(isset($_COOKIE['emailfromlogin'])){
            echo'<form method="post">
            <button type="submit" name="logout" class="btn" style="border: none; color:#666666; font-weight: 500; padding-left:0px; padding-bottom: 12px;
            padding-top: 12px;outline:none;">LogOut</button> </form>   <hr class="my-0" style="border: 1px solid black;background-color:black">';
            echo'<a href="cart design.php" class="btn " style="border: none; color:#666666; font-weight: 500; padding-left:0px; padding-bottom: 12px;
            padding-top: 12px;outline:none;">My Cart <i class="fas fa-shopping-cart "></i></a><hr class="my-0" style="border: 1px solid black;background-color:black">';
            echo'<a  href="wishlist.php" class="btn " style="border: none; color:#666666; font-weight: 500; padding-left:0px; padding-bottom: 12px;
            padding-top: 12px;outline:none;">Wishlist <i class="far fa-heart"></i></a> <hr class="my-0" style="border: 1px solid black;background-color:black">';
            echo'<a href="myorders.php" class="btn " style="border: none; color:#666666; font-weight: 500; padding-left:0px; padding-bottom: 12px;
            padding-top: 12px;outline:none;">My Orders <i class="fas fa-list-ul"></i></a> ';
          }else{
            echo'<a type="button" class="btn" style="border: none; color:#666666; font-weight: 500; padding-left:0px; padding-bottom: 12px;
            padding-top: 12px;outline:none;">Sign In</a>';
          }
          ?>
            <hr class="mt-0 mb-1" style="border: 1px solid black;background-color:black">
    

      </li>
        
        <!-- ssss -->
        
        <li class="nav-item ">
          <div class="input-group rounded" style=" padding-bottom: 12px;padding-top: 12px;">
          
            <input class="searchText form-control rounded" type="text" id="search1" name="search1"  placeholder="Search..."/>
            <span class="input-group-text border-0" id="search-addon" style="background-color: none;">
              <i class="fas fa-search"></i>
            </span>
          </div>
          <div class="list-group" id="show-list11111">
          </div>
        </li>
    
            
        </ul>
        </div>
        <div class="after"></div>
    
    </div>
    <header class="header " style="width: 100%;">
        <nav class="top-bar">
                  <div class="container d-flex align-items-center justify-content-lg-between ">
        <a href="#" class="barnd">
         <img src="img/RB.jpg" alt="" width="50px" height="50px" style="border-radius: 50%;">
          </a>
                <ul class="nav nav-menu ">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link"> Home</a>
                    </li>
                    <li class="nav-item">
                        
                          <div class="dropdown nav-link ">
                            <button class="dropbtn  p-0" style="background-color:inherit; color: inherit; outline:none;">Men <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                            <div class="dropdown-content">
                            <a href="manshirt.php">T-shirt</a>
                            <a href="manpants.php">pants</a>
                            <a href="manshoes.php">shose</a>
                            <a href="manaccess.php">accsesory</a>
                            </div>
                          </div>
                        
                    </li>
                    <li class="nav-item">
                      <div class="dropdown nav-link ">
                        <button class="dropbtn  p-0" style="background-color:inherit; color: inherit; outline:none;">Woman <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                        <div class="dropdown-content">
                        <a href="womanshirt.php">T-shirt</a>
                        <a href="womenpants.php">pants</a>
                        <a href="shoeswomen.php">shose</a>
                        <a href="womanaccess.php">accsesory</a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <div class="dropdown nav-link ">
                        <button class="dropbtn  p-0" style="background-color:inherit; color: inherit;outline:none;">Kids <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                        <div class="dropdown-content">
                        <a href="shirtkids.php">T-shirt</a>
                        <a href="pantskids.php">pants</a>
                        <a href="shoeskids.php">shose</a>
                        <a href="accesskids.php">accsesory</a>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="AboutUs.php" class="nav-link">  About us</a>
                    </li>
                    <li class="nav-item">
                      <a href="ContactUs.php" class="nav-link">  Contact us</a>
                    </li>
    
                    <li class="nav-item ">
                    <form>
                      <div class="searchCircle">
                        <input  class="searchText" type="text" id="search" name="search" placeholder="Type to Search" >
                        <!--  -->
                          <a class="searchButton" href="#"  id="search">
                          <i class="fas fa-search"></i>
                        </a>
                        
                      </div>
                      
                      </form>
                      
                    </li>
                    
                    
                    

                </ul>
                

                

                <div class="dropdown ">
                <?php if(isset($_COOKIE['emailfromlogin'])){
                    echo'
                    <a href="profile.php" class="dropbtn dropdown-toggle p-0" style="background-color:inherit; color: white; outline:none;"><i class="fa fa-user fa-fw" style="color:white"></i></a>
                    <div class="dropdown-content" style="border-radius: 5px;">
                    <a href="cart design.php" class="btn" style="border: none;"><i class="fas fa-shopping-cart "></i> My Cart</a>
                    <a href="wishList.php" class="btn" style="border: none;"><i class="far fa-heart" ></i> My Wishlist</a>
                    <a href="myorders.php" class="btn" style="border: none;"><i class="fas fa-list-ul"></i> My Order</a>
                    </div>
                    </a>
                    ';
                }else{
                  echo'';
                }
                  
                  ?>
                  </div>
                
                
                
                <!-- <button type="button" class="btn btn-outline-primary text-white" style="border: none;">Sign In</button> -->
                <!-- <a href="" class="btn btn-outline-primary text-white " style="border: none;"><i class="fas fa-shopping-cart "></i> Cart</a> -->
                
                <?php if(isset($_COOKIE['emailfromlogin'])){
            echo'<form method="post">
            <button type="submit" name="logout" class="btn btn-outline-primary text-white" style="border: none;">Log Out</button>
            </form>';
          }else{
            echo'<a href="login/login form.php" class="btn btn-outline-primary text-white" style="border: none;">Sign In</a>';
          }?>
             <button class="btn btn-menu">
                  <i class="fas fa-bars"></i>  
          </button>


          
        </nav>
          </div>
    </header>
    <div class="list-group" id="show-list1111" style="width: 250px;margin-left:870px;position:absolute;z-index:1">
      
    </div>

    


<script src="jquery-3.6.0.min.js"></script>
<!-- <script src="jquery-3.3.1.slim.js"></script>
<script src="jquery-3.3.1.slim.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>// start heder
        document.querySelector('.btn-menu').addEventListener('click',function () {
          document.querySelector('.mobile-menu').classList.add('show');
        });
          document.querySelector('.mobile-menu .btn-close , .mobile-menu .after').addEventListener('click',function () {
          document.querySelector('.mobile-menu').classList.remove('show');
        });
        
        // for run press enter
        // function search_func(){
        // address=document.getElementById("search").value;
        // }
        
        // function handle(e){
        // address=document.getElementById("search").value;
        //   if(e.keyCode === 13){
          
        //   }
        // return false;
        // }
        </script>

<script >// -------multilevel-accordian-menu---------

var dropdown = document.getElementsByClassName("dropdown-btn111");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }

        var dropdown = document.getElementsByClassName("dropdown-btn112");
        var j;
        
        for (j = 0; j < dropdown.length; j++) {
          dropdown[j].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }
        var dropdown = document.getElementsByClassName("dropdown-btn113");
        var k;
        
        for (k = 0; k < dropdown.length; k++) {
          dropdown[k].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
          } else {
          dropdownContent.style.display = "block";
          }
          });
        }


        </script>
        <script>
          $(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list1111").html(response);
        },
      });
    } else {
      $("#show-list1111").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list1111").html("");
  });
});

$(document).ready(function () {
  // Send Search Text to the server
  $("#search1").keyup(function () {
    let searchText1 = $(this).val();
    if (searchText1 != "") {
      $.ajax({
        url: "action.php",
        method: "POST",
        data: {
          query: searchText1,
        },
        success: function (response) {
          $("#show-list11111").html(response);
        },
      });
    } else {
      $("#show-list11111").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search1").val($(this).text());
    $("#show-list11111").html("");
  });
});
        </script>
</body>
</html>