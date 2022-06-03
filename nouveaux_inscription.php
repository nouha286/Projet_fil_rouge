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
    <section class="callout ms-3 shadow-lg bg-body rounded col-8 col-md-8">
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Nouveaux Inscriptions</h1>
    
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
            <th scope="col">N°</th>
          <th scope="col">NOM</th>
          <th scope="col">NOM DU BUSINESS</th>
          <th scope="col">TYPE DU CLIENT</th>
          

          <th scope="col"> N° TEL</th>
          <th scope="col">VILLE</th>
          <th scope="col">ADRESSE</th>
          <th scope="col">PRODUITS</th>
          <th scope="col">EMAIL</th>
          <th scope="col" class="text-center">ACTIONS</th>
          


          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Nouhaila ELAALAMI</td>
          <td>Jumia</td>
          <td>Site e-commerce</td>
          
          <td>0628578248</td>
          <td>Marrakech</td>
          <td>Loudaya</td>
          <td>Montre</td>
          <td>jumia@gmail.com</td>
          <td class="d-flex flex-row"><a class="btn   me-2" style="text-decoration:none; color:white; background-color:greenyellow; " href="">Activer</a> <a class="btn  " style="text-decoration:none; color:white; background-color:red; " href="connexion_admin.php">Supprimer</a> </td>
         
        </tr>
        
      </tbody>
    </table>
    </div>
   
        
    </section>
</div>

</body>
</html>