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
</style>
<body style="border: 5px red solid;">

 <?php include('sidebar.php'); ?>

<div class="d-flex flex-row mb-3 ">
       

<?php include('side_dash.php'); ?>

<section class="container mx-0 callout shadow-lg p-0 mb-5 bg-body rounded" style=" max-width: 1400px;">
<div class="table-responsive" >
<table class="table">
  <thead>
    <tr>
       <th scope="col">colis N°</th>
      <th scope="col">DESTAINATAIRE</th>
      <th scope="col">STATUT</th>
      <th scope="col">DATE DE CREATION</th>
      <th scope="col">PRIX</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col">VILLE</th>
      <th scope="col">PRODUITS</th>
      <th scope="col">ACTIONS</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

     
</section>
</div>

</body>
</html>