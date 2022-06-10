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
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Etat Des Colis</h1>
    
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">DESTAINATAIRE</th>
          <th scope="col">STATUT</th>
          <th scope="col">Ville.DES</th>
          <th scope="col">Disponibilite_Des</th>
          <th scope="col">Produit</th>
          <th scope="col">Poids</th>
          <th scope="col">Prix</th>
          <th scope="col">Nom business</th>
          <th scope="col" class="text-center">ACTIONS</th>
          
          
          
        </tr>
      </thead>
      <tbody>
      <?php
                            $Admin = new Admin();
                            $Nvcolis = $Admin->affichNvColis();
                            
                            foreach ($Nvcolis as $colis) {
                              $id=$colis['id_client'];
                              $Admin->setNomstore($id);
                              $nom_store=$Admin->NomStore();
                                echo '
                                        <tr>
                                            <th>' . $colis['id'] . '</th>
                                            <td>' . $colis['Destinataire'] . '</td>
                                            <td>' . $colis['Statut'] . '</td>
                                            
                                            <td>' . $colis['Ville_Des'] . '</td>
                                           
                                            <td>' . $colis['Disponibilite_Des'] . '</td>
                                            <td>' . $colis['Produit'] . '</td>
                                            <td>' . $colis['Poids'] . 'Kg</td>
                                            <td>' . $colis['Prix'] . '</td>
                                            <td>' . $nom_store['Nom_business'] . '</td>
                                            <td colspan="4" class="text-center"><a class="btn  btn-lg" style="text-decoration:none; color:white; background-color:greenyellow; " href="etat.php?id_Livré='.$colis['id'].'">Livré</a> <a class="btn  btn-lg" style="text-decoration:none; color:white; background-color:red; " href="etat.php?id_Retour='.$colis['id'].'">Retour</a> </td>
         
                                           
                                        </tr>
                                        
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