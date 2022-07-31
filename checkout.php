<?php 
 require 'db.php';


$totalPrice=0;
$allItem='';
$allid='';
$item=array();
$getfileID=array(); 
$prodactToCheckout=$database->prepare("SELECT productName,productPrice,quantity,category,getfileID from cart where IDLogin=:emailfromlogin and checkout=''");
$prodactToCheckout->bindParam("emailfromlogin",$_COOKIE['emailfromlogin']);
$prodactToCheckout->execute();

// foreach($prodactToCheckout AS $cart){

    

// }
// echo $totalPrice;
// print_r($item);

// echo $allItem;


// $prodactToCheckout1=$prodactToCheckout->fetchObject();
// echo $_COOKIE['emailfromlogin'];


if(isset($_POST['checkout'])){
  header("location: myorders.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>checkout</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/03bb4652eb.js" crossorigin="anonymous"></script>  
  </head>
  <body>

  <?php include 'header.php';?>

    <main class="mt-5 pt-4">
        <div class="container ">
          <h1 class="mb-0 h2 text-center" style="color: blue;"><i class="fas fa-credit-card"></i></h1>
          <h1 class="text-center">Checkout</h1>
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <form class="card-body" method="post">
                    <div class="form-group ">
                      <label for="exampleFormControlInput1">User Name</label>
                      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Your Name" name="name">
                    </div>
                  <div class="form-group ">
                    <label for="exampleFormControlInput2">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" name="email">
                  </div>
                  <div class="form-group ">
                    <label for="exampleFormControlInput3">Adress</label>
                    <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="West Bekaa,sawiri" name="address">
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                      <label for="country">Country</label>
                      <select class="custom-select d-block w-100" id="country" required name="country">
                        <option value="" hidden>Choose...</option>
                        <option>Lebanon</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select a valid country.
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                      <label for="state">State</label>
                      <select class="custom-select d-block w-100" id="state" required name="state">
                      <option value="" hidden>Choose...</option>
                          <?php 
                          $getcountry=$database->prepare("SELECT * from country");
                          $getcountry->execute();
                          foreach($getcountry as $country){
                            echo '<option>'.$country['name'].'</option>';
                          }
                          ?>
                      </select>
                      <div class="invalid-feedback">
                        Please provide a valid state.
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="d-block ">
                    <div class="custom-control custom-radio">
                      <input id="credit" name="paymentMethod" value="Credit card" type="radio" class="custom-control-input"  checked>
                      <label class="custom-control-label" for="credit">Credit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="debit" name="paymentMethod" value="Debit card" type="radio" class="custom-control-input" >
                      <label class="custom-control-label" for="debit">Debit card</label>
                    </div>
                    <div class="custom-control custom-radio">
                      <input id="paypal" name="paymentMethod" value="Paypal" type="radio" class="custom-control-input" >
                      <label class="custom-control-label" for="paypal">Paypal</label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 ">
                      <label for="cc-name">Name on card</label>
                      <input type="text" class="form-control" id="cc-name" placeholder="" required name="card">
                      <small class="text-muted">Full name as displayed on card</small>
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>
                    <div class="col-md-6">
                      <label for="cc-number">Credit card number</label>
                      <input type="text" class="form-control" id="cc-number" placeholder="" required name="number">
                      <div class="invalid-feedback">
                        Credit card number is required
                      </div>
                    </div>
                  </div>
                  <hr >
                  <button class="btn btn-primary btn-lg btn-block"  name="checkout" type="submit"><i class="fas fa-credit-card"></i> Checkout</button>
                </form>
              </div>
            </div>
            <div class="col-md-4 mb-4">
    
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-primary badge-pill"><?php echo $prodactToCheckout->rowCount();?></span>
              </h4>
              <ul class="list-group mb-3 ">
    <?php 
    foreach($prodactToCheckout AS $cart){
        $totalPrice+=$cart['productPrice']*$cart['quantity'];
    $item[]=$cart['productName'];
    $getfileID[]=$cart['getfileID'];
        
               echo' <li class="list-group-item d-flex justify-content-between ">
                  <div>
                    <h6 class="my-0">'.$cart['productName'].'</h6>
                    <small class="text-muted">'.$cart['category'].'</small>
                  </div>
                  <span class="text-muted">$'.$cart['productPrice']*$cart['quantity'].'</span>
                </li>';
        
    
    }
    ?>
              
              
              
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (USD)</span>
                  <strong>$<?php echo $totalPrice;?></strong>
                </li>
              </ul>
            </div>
            
          </div>
        </div>
      </main>
     
    
      <?php include 'footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php
if(isset($_POST['checkout'])){

      $name=$_POST['name'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $country=$_POST['country'];
      $state=$_POST['state'];
      $paymentMethod=$_POST['paymentMethod'];
     $card=$_POST['card'];
     $number=$_POST['number'];
  
    $allItem=implode(",",$item);
    $allid=implode(",",$getfileID);
    // echo $allid;
  
      $insertintocheckout=$database->prepare('INSERT INTO checkout (name,email,address,state,typecheckout,nameoncard,cardnumber,IDLogin,products,totalprice,IDSproduct) 
      VALUES(:name,:email,:address,:state,:paymentMethod,:card,:number,:emailfromlogin,:allItem,:totalprice,:IDSproduct)');
      $insertintocheckout->bindParam("name",$name);
      $insertintocheckout->bindParam("email",$email);
      $insertintocheckout->bindParam("address",$address);
      $insertintocheckout->bindParam("state",$state);
      $insertintocheckout->bindParam("paymentMethod",$paymentMethod);
      $insertintocheckout->bindParam("card",$card);
      $insertintocheckout->bindParam("number",$number);
      $insertintocheckout->bindParam("emailfromlogin",$_COOKIE['emailfromlogin']);
      $insertintocheckout->bindParam("allItem",$allItem);
      $insertintocheckout->bindParam("totalprice",$totalPrice);
      $insertintocheckout->bindParam("IDSproduct",$allid);

      $insertintocheckout->execute();

      $getId=explode(",", $allid);
      foreach($getId as $getId1){
        $updatecheckcart=$database->prepare("UPDATE cart SET checkout='checkout' where getfileID=:getId1 and IDLogin=:emailfromlogin");
        $updatecheckcart->bindParam("getId1",$getId1);
        $updatecheckcart->bindParam("emailfromlogin",$_COOKIE['emailfromlogin']);
        $updatecheckcart->execute();
      }
  

  
          
  
  }

?>