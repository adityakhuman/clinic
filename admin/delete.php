<?php
    include("conn.php");
    $id = $_GET['id'];
    $delete = "delete from medicine where id=$id";
    $result = mysqli_query($conn,$delete);
    if($result){
        header('Location:medicine.php');
    }else{
        echo "sorry not delete";
    }
      
?>