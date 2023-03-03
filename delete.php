<?php // Tout notre systeme de supprimer de notre logiciel 
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo'Vos informations on était supprimer';
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}


?>