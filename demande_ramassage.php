<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('scriipt.php'); ?>
    <title>Document</title>
</head>
<style>
     @media screen and (max-width: 1400px)
 {
     .btn-nav
     {
         display: none;
     }
     .n{
        display: none;

     }
     .d{
        text-align: center;
       
     }

    .card
    {
        margin: auto;
    }
   
 }
 .client
 {
     display: none;
 }

 
 
</style>
<body style="overflow-x:hidden;">

 <?php include('sidebar.php'); ?>

<div class="row" style="min-width:200px !important; ">
       
    <div class="col-2 ms-2 me-1 ">
        <?php include('side_dash_admin.php'); ?>
    </div>
    <section class="callout ms-2 shadow-lg bg-body rounded col-8 col-md-8">
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Demandes du rammassage</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">Nom du Vendeur</th>
          <th scope="col">Adresse Vendeur</th>
          <th scope="col">DATE DE CREATION</th>
          <th scope="col">Poids</th>
          <th scope="col">TELEPHONE</th>
          <th scope="col">VILLE</th>
          <th scope="col">PRODUITS</th>
          <th class="text-center" scope="col">ACTIONS</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Jumia</td>
          <td>Nouhaila ELAALAMI</td>
         
          <td>4/06/2022</td>
          <td>5 <span>Kg</span></td>
          <td>0628578248</td>
          <td>Marrakech</td>
          <td>Montre</td>
         
          <td class="text-center"> <a class="btn  " style="text-decoration:none; color:white; background-color:red; " href="connexion_admin.php">Rammasser</a> </td>
         
        </tr>
        
      </tbody>
    </table>
    </div>
  
        
    </section>
</div>

</body>
</html>