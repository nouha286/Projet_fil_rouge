<?php session_start();
include('Colis.php');
$colis=new Colis();
if(isset($_POST['save']))
  {
    $colis->setDes($_POST['nom']);
      $colis->setStatut($_POST['statut']);
      $colis->setTel_Des($_POST['Tel']);
      $colis->setVille_Des($_POST['Ville']);
      $colis->setAdresse_Des($_POST['Adresse']);
      $colis->setDisponibilité($_POST['Dis']);
      $colis->setProduit($_POST['Prod']);
      $colis->setPoids($_POST['Poid']);
      $colis->setPrix($_POST['Prix']);
      $colis->setIdColis($_GET['id']);
      $date=date('l j F Y, H:i');
      
      $colis->setDate_C($date);

      $colis->editInfoColis();
      
     
  }

if(isset($_GET['id']))
{
    $sql="SELECT *FROM colis WHERE id LIKE ?";

    $prepare=$colis->GetData($sql);
   $param=$_GET['id'];
    $prepare->execute([$param]);
    $modification= $prepare->fetch();
    
}

if(isset($_GET['id_del']))
{
    $param=$_GET['id_del'];

    $sql="DELETE FROM colis_a_rammasser WHERE id_colis LIKE ?";
    $prepare=$colis->GetData($sql);
   
    $prepare->execute([$param]);

    $prepare=$colis->GetData($sql);

    $sql="DELETE FROM colis WHERE id LIKE ?";

    $prepare=$colis->GetData($sql);
   
    $prepare->execute([$param]);
    
    header('location:colis_client.php');
}
  


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
 .parsley-errors-list
  {
    color: red;
  }  
 
</style>
<body style="overflow-x:hidden;">

 <?php include('sidebar.php'); ?>

<div class="row" style="min-width:200px !important; ">
       
    <div class="col-2 ms-2 me-1 ">
        <?php include('side_dash.php'); ?>
    </div>
    <section class="callout ms-2 shadow-lg bg-body rounded col-8 col-md-8">
    
    <div class="card mt-5  shadow-lg p-3 mb-5 bg-body rounded"  >
    <div class="card-body  " >
          <form data-parsley-validate method="POST" >
           <?php  ?>   
          <div class="mb-3">
                        
                        <input required	data-parsley-required="true" value="<?php echo $modification['Destinataire']; ?>" name="nom"  pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-pattern="/^[a-zA-Z ]{3,20}$/" type="text" class="form-control" data-parsley-trigger="change" placeholder="Destinataire" id="exampleInputEmail6" >
                        
              </div>

              <div class="mb-3">
                       <label for="" class="mb-1">Statut</label>
                       <select name="statut" required 	data-parsley-required="true" class="form-select" aria-label="Default select example">
                          <option value="Nouveau colis" >Nouveau colis</option>
                          <option value="colis du stock">colis du stock</option>
                          <option value="Attente du rammasage">Attente du ramassage</option>
                        </select>
                        
              </div>


              <div class="mb-3">
                       
                        <input data-parsley-required="true" name="Tel" value="<?php echo $modification['Telephone_Des']; ?>"  required pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" data-parsley-trigger="change" data-parsley-pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$"	 type="text"  placeholder="Numéro de téléphone du destinataire" class="form-control" id="exampleInputEmail7" >
                        
              </div>
              <div class="mb-3">
                        <input type="text" data-parsley-required="true" value="<?php echo $modification['Ville_Des']; ?>"  name="Ville" required class="form-control" pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-trigger="change"	 placeholder="Ville"  >
                        
              </div>
              <div class="mb-3">
                        <input type="text" data-parsley-required="true" name="Adresse" value="<?php echo $modification['adresse_Des']; ?>"  required class="form-control"  placeholder="Adresse du destinatair" data-parsley-trigger="change" id="exampleInputEmail5">
                        
              </div>
              
              <div class="mb-3">
                        <label for="" class="mb-2">Disponibilité du destinaire</label>
                        <input data-parsley-required="true" name="Dis" required type="date" value="<?php echo $modification['Disponibilite_Des']; ?>"  class="form-control" placeholder="Disponibilité du client" data-parsley-trigger="change" id="exampleInputEmail4" >
                        
              </div>
              <div class="mb-3">
                        <input data-parsley-required="true" name="Prod" required type="text" class="form-control" value="<?php echo $modification['Produit']; ?>"   pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-pattern="/^[a-zA-Z ]{3,20}$/" data-parsley-trigger="change" placeholder="Produit" id="exampleInputEmail1" >
                        
              </div>
              
              <div class="mb-3">
                        <label for="" class="mb-2">Poids Du Produis</label>
                        <input data-parsley-required="true" name="Poid" max="30"	data-parsley-max="30" required type="number" value="<?php echo $modification['Poids']; ?>"  class="form-control" data-parsley-trigger="change" max="30" min="0" id="exampleInputEmail2" >
                        
              </div>
              <div class="mb-3">
                        
                        <input data-parsley-required="true" name="Prix" required type="text" value="<?php echo $modification['Prix']; ?>"  pattern="/^(-)?[0-9]+([.,][0-9]+(e(-)?[0-9]+)?)?$/" data-parsley-pattern="/^(-)?[0-9]+([.,][0-9]+(e(-)?[0-9]+)?)?$/" placeholder="Prix" data-parsley-trigger="change" class="form-control"  id="exampleInputEmail3" >
                        
              </div>
              
                <div class="text-end">
                <button type="submit" name="save" class="btn  btn-primary">Modifier</button>
                </div>
                      
            </form>
          </div>

        </div>
    </section>
</div>

</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script type="text/javascript" src="parsly_fr.js"></script>
