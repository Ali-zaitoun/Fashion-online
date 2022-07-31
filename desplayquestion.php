
    <?php 
 require 'db.php';

    $selectfromcontact=$database->prepare("SELECT * FROM contactus ");
    $selectfromcontact->execute();
    
$a=array();

foreach($selectfromcontact as $sql){
    if($selectfromcontact->rowCount()>0){
    if($sql['email']==$_COOKIE['emailfromlogin']){
        array_push($a,$sql);
    }
}

}
if(sizeof($a)>0){
    echo '
          <div class="container mt-3">
      <h1 class="display-6">Your Question</h1>
          <table class="table">
          <thead>
          <tr>
            <th scope="col">Email</th>
            <th scope="col">Questions</th>
            </tr>
            </thead>';
foreach($a as $sql){
    echo '<tr>
          <td>'.$sql['massage'].'</td>
          <td>'.$sql['answer'].'</td>
            </tr>
        ';
}
echo '</table> </div>';
}else{
    echo '';
}

    ?>
  