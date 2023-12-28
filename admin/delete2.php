<?php
    include("conn.php");
    $id = $_GET['id'];
    $delete = "delete from ordere where id=$id";
    $result = mysqli_query($conn,$delete);
    if($result){
        header('Location:ordere.php');
    }else{
        echo "sorry not delete";
    }
?>