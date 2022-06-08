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
          <th scope="col">Nom du Vendeur</th>
          <th scope="col">Adresse Vendeur</th>
          <th scope="col">DATE DE CREATION</th>
          <th scope="col">Poids</th>
          <th scope="col">TELEPHONE</th>
          <th scope="col">VILLE</th>
          <th scope="col">PRODUITS</th>
          <th scope="col">ACTIONS</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
      <?php
                            $Nvcolis = new Colis();
                            $Nvcolis = $Nvcolis->affichNvColis();
                            
                            foreach ($Nvcolis as $colis) {
                                echo '
                                        
                                            <th>' . $colis['id'] . '</th>
                                            <td>' . $colis['Destinataire'] . '</td>
                                            <td>' . $colis['Statut'] . '</td>
                                            <td>' . $colis['Telephone_Des'] . '</td>
                                            <td>' . $colis['Ville_Des'] . '</td>
                                            <td>' . $colis['adresse_Des'] . '</td>
                                            <td>' . $colis['Disponibilite_Des'] . '</td>
                                            <td>' . $colis['Produit'] . '</td>
                                            <td>' . $colis['Poids'] . 'Kg</td>
                                            <td>' . $colis['Prix'] . '</td>
                                            <td>' . $colis['Etat'] . '</td>
                                          
                                            <td><a href="#" class="me-3" ><i class="fa fa-lg fa-trash text-danger" aria-hidden="true"></i></a><a href="#" ><i class="fa fa-lg fa-pencil-square-o text-success" aria-hidden="true"></i></a></td>
         
                                        
                                        
                                        ';
                            }
                           echo   '
                                        
                           
                         
                           <td>' . $colis['Disponibilite_Des'] . '</td>
                           <td>' . $colis['Produit'] . '</td>
                           <td>' . $colis['Poids'] . 'Kg</td>
                           <td>' . $colis['Prix'] . '</td>
                           <td>' . $colis['Etat'] . '</td>
                         
                           <td><a href="#" class="me-3" ><i class="fa fa-lg fa-trash text-danger" aria-hidden="true"></i></a><a href="#" ><i class="fa fa-lg fa-pencil-square-o text-success" aria-hidden="true"></i></a></td>

                       
                       
                       ';



                            ?>
        </tr>
      </tbody>
    </table>
    </div>
  
        
    </section>
</div>

</body>
</html>