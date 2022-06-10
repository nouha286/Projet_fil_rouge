<?php session_start(); 
include('Colis.php');
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
 .admin 
 {
     display: none;
 }

 
 
</style>
<body style="overflow-x:hidden;">

 <?php include('sidebar.php'); ?>

<div class="row" style="min-width:200px !important; ">
       
    <div class="col-2 ms-2 me-1 ">
        <?php include('side_dash.php'); ?>
    </div>
    <section class="callout ms-2 shadow-lg bg-body rounded col-8 col-md-8">
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Colis à rammasser</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">Nom du Store</th>
          <th scope="col">Adresse.Vend</th>
          <th scope="col">Ville.Vend</th>
          <th scope="col">TELEPHONE.vend</th>
          <th scope="col">DATE DE CREATION</th>
          <th scope="col">PRODUITS</th>
          <th scope="col">Poids</th>
         
          
          <th scope="col">ACTIONS</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
      <?php
                            $colis = new Colis();
                            $Nvcolis = $colis->affichColisRamassage();
                            $info_client=$colis->infoClient();
                            
                            foreach ($Nvcolis as $colis) {
                                echo '
                                <tr>
                                            <th>' . $colis['id'] . '</th>
                                            <td>' .  $info_client[2]. '</td>
                                            <td>' . $info_client[6]. '</td>
                                            <td>' .$info_client[5] . '</td>
                                            <td>' . $info_client[4] . '</td>
                                            <td>' . $colis['Date_création'] . '</td>
                                            <td>' . $colis['Produit'] . '</td>
                                            <td>' . $colis['Poids'] . 'Kg</td>
                                            
                                            <td class="text-center"><a href="edit_rammassage.php?" ><i class="fa fa-lg fa-pencil-square-o text-success" aria-hidden="true"></i></a></td> </tr>;
                            
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