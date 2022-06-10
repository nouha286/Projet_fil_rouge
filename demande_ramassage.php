<?php session_start(); 
include('Admin.php');
?>
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
          <th scope="col">NOM VENDEUR</th>
          <th scope="col">Telephone du Vendeur</th>
          <th scope="col">Adresse Vendeur</th>
          <th scope="col">VILLE DU VENDEUR</th>
          <th scope="col">PRODUIT</th>
          
          <th scope="col">POIDS</th>
          <th scope="col">DATE DE CREATION</th>
          <th class="text-center" scope="col">ACTIONS</th>
          
        </tr>
      </thead>
      <tbody>
      <?php
                            $colis = new Admin();
                            $Nvcolis = $colis->affichColisRamassage();
                            
                            
                            foreach ($Nvcolis as $colis) {
                                echo '
                                <tr>
                                            <th>' . $colis[0] . '</th>
                                            <td>' .  $colis[1]. '</td>
                                            <td>' . $colis[2]. '</td>
                                            <td>' .$colis[3] . '</td>
                                            <td>' . $colis[4] . '</td>
                                            <td>' . $colis[5] . '</td>
                                            <td>' . $colis[6] . '</td>
                                            <td>' . $colis[7] . '</td>
                                            
                                            <td class="text-center"> <a class="btn" style="text-decoration:none; color:white; background-color:red; " href="etat.php?id_ramassage='.$colis[0].'">Rammasser</a> </td>
         
                                            ';
                                            
                                          }
                          



                            ?>
         
          
        
        
      </tbody>
    </table>
    </div>
  
        
    </section>
</div>

</body>
</html>