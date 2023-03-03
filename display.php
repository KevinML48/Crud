<?php
include 'connect.php';?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Vos favoris enregistrer</title>
</head>
<body>


    <div class="container">
      <div class="row g-0 text-center">
        <div class="col-sm-6 col-md-4">  <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Nouveau Utilisateur</a> </button> </div>
          <div class="col-6 col-md-8">   <h1> Votre tableau de bord </h1> </div>
    </div>


            <table class="table">
  <thead>
    <tr>
      <th scope="col">Numero</th>
      <th scope="col">Nom d'utilisateur</th>
      <th scope="col">Email</th>
      <th scope="col">Telephone</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

    <?php

    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $mobile=$row['mobile'];
            $password=$row['password'];
            echo ' <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light" >Mis a jour</a> </button>
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Supprimer</a> </button>
            </td>
          </tr>';
        }
    }

    ?>

  </tbody>
</table>

    </div>
    
</body>
</html>