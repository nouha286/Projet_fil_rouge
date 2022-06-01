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

<body>
<?php include('sidebar.php') ?>


<section class="container">

<div class="n  ">
                  <img src="admin2.svg" style="max-width:500px ;" alt="">
    </div>
   <div class="row  mt-5">
  


    <div class="card col-sm-6  shadow-lg p-3 mb-5 bg-body rounded" style="max-height:250px ; min-width:500px;" >
          <div class="card-body " >
          <form>
              <div class="mb-3">
                   
                        <input type="email" placeholder="Adresse Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>

                      <div class="mb-3">
                       
                        <input type="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                      </div>

                      

                      <button type="submit" class="btn btn-primary">Se connecter</button>
            </form>
          </div>
          <div class="text-center">
          Nouveau sur notre plateforme ?<a href="inscription_admin.php" style="color:red; text-decoration:none;">Créer un compte</a>
          </div>
    </div> 

    <div class="n col-sm-6 ">
     <img src="admin1.svg" style="max-height: 400px;"  alt="">
   </div>
   </div>

   
         
</section>



</body>
</html>