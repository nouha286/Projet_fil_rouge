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
    <h1 class="text-center display-5 mb-5 fst-italic mt-2" style="color:#9573D4;">Création des colis</h1>
    <div class="table-responsive" >
    <table class="table ">
      <thead>
        <tr>
          <th scope="col">colis N°</th>
          <th scope="col">DESTAINATAIRE</th>
          <th scope="col">STATUT</th>
          <th scope="col">DATE DE CREATION</th>
          <th scope="col">PRIX</th>

          <th scope="col">TEL.DES</th>
          <th scope="col">VILLE.DES</th>
          <th scope="col">Desponibilité.DES</th>
          <th scope="col">PRODUITS</th>
          <th scope="col">POIDS</th>
          <th scope="col">ACTIONS</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Nouhaila ELAALAMI</td>
          <td>en stock</td>
          <td>4/06/2022</td>
          <td>200,0 <span>DH</span></td>
          <td>0628578248</td>
          <td>Marrakech</td>
          <td>6/6/2022</td>
          <td>Montre</td>
          <td>5Kg</td>
          <td><a href="#" class="me-3" ><i class="fa fa-lg fa-trash text-danger" aria-hidden="true"></i></a><a href="#" ><i class="fa fa-lg fa-pencil-square-o text-success" aria-hidden="true"></i></a></td>
         
        </tr>
        
      </tbody>
    </table>
    </div>
   <!-- Button trigger modal -->
   
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Ajouter une colis
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
          <div class="mb-3">
                        
                        <input type="text" class="form-control" placeholder="Destinataire" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>

              <div class="mb-3">
                       <label for="" class="mb-1">Statut</label>
                       <select class="form-select" aria-label="Default select example">
                          <option selected>Nouveau colis</option>
                          <option value="E-commerce">colis du stock</option>
                          <option value="Auto-entrepreneur">Attente du ramassage</option>
                        </select>
                        
              </div>


            

              <div class="mb-3">
                       
                        <input type="text" placeholder="Numéro de téléphone du destinataire" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>
              <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Ville" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>
              <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Adresse du destinataire" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>
              
              <div class="mb-3">
                        <label for="" class="mb-2">Disponibilité du destinaire</label>
                        <input type="date" class="form-control" placeholder="Disponibilité du client" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>
              <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Produit" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>
              
              <div class="mb-3">
                        <label for="" class="mb-2">Poids Du Produis</label>
                        <input type="number" class="form-control" max="30" min="0" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>
              

                      
           
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
      </form>
    </div>
  </div>
</div>
        
    </section>
</div>

</body>
</html>