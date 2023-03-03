<?php // Toute la partie mis a jour de notre logiciel de favoris 
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password']; //On viens crée nos variable en avec le formulaire en dessous des attributs name="" !

    $sql = "update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo'Vous avez bien mis a jour vos informations';
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

   <div class="container my-5">
    <form method="post">
        <label >Name</label>
            <input type="text" class="form-control" placeholder="Entrer votre nom" name="name" value=<?php echo $name;?>>

            <label >Email</label>
            <input type="email" class="form-control" placeholder="Entrer votre email" name="email" value=<?php echo $email;?>>

            <label >Mobile</label>
            <input type="text" class="form-control" placeholder="Entrer votre numéro de téléphone" name="mobile" value=<?php echo $mobile;?>>

            <label >Password</label>
            <input type="text" class="form-control" placeholder="Entrer votre mot de passe" name="password" value=<?php echo $password;?>>

        <button type="submit" name="submit" class="btn btn-primary">Update</button>
    </form>

    
   </div>


  </body>
</html>