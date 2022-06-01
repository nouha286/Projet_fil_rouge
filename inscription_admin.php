<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <title>connexion-client</title>

</head>
<style>
 @media screen and (max-width: 600px)
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

    
   
 }
   
</style>

<body>

<?php include('sidebar.php') ?>


<section class="container">

<div class="n 	d-none d-xxl-block ">
                  <img src="admin2.svg" style="max-width:300px ;" alt="">
    </div>
   <div class="row  mt-5">
  


    <div class="card col-sm-6  shadow-lg p-3 mb-5 bg-body rounded" >
          <div class="card-body " >
          <form>
          <div class="mb-3">
                        
                        <input type="text" class="form-control" placeholder="Nom" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>

         
              <div class="mb-3">
                   
                        <input type="email" placeholder="Adresse Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>

              <div class="mb-3">
                   
                        <input type="email" placeholder="Confirmez l'adresse Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>


           
                      <div class="mb-3">
                       
                        <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                      </div>

                      <div class="mb-3">
                        <input type="password" placeholder="Confirmation Password" class="form-control" id="exampleInputPassword1">
                      </div>

                      
                      <div class="mb-3">
                        <input type="password" placeholder="Identifient admin" class="form-control" id="exampleInputPassword1">
                      </div>

                      <button type="submit" class="btn btn-primary">S'inscrire</button>
            </form>
          </div>
          <div class="text-center">
          Vous avez déja un compte? <a href="connexion_admin.php" style="color:red; text-decoration:none;">Se connecter</a>
          </div>
    </div> 

    <div class="n col-sm-6">
     <img src="admin1.svg"  alt="">
   </div>
   </div>

   
         
</section>



</body>
</html>