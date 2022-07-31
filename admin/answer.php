<?php
require '../db.php';
echo $_POST['answer'];
echo $_GET['ID'];
if(isset($_POST['answer'])){
    $updatecontact=$database->prepare("UPDATE `contactus` SET answer=:answer where ID=:ID");
    $updatecontact->bindParam('answer',$_POST['answer']);
    $updatecontact->bindParam('ID',$_GET['ID']);
    
    $updatecontact->execute();
    header("location:Users.php");
}
?>