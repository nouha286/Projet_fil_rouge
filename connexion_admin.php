<?php 
include('Admin.php');
$alert='';
if (isset($_POST['login']) && isset($_POST['Email']) && isset($_POST['Password']) )
{
    $connection=new Admin();
            
           
         
            $connection->setEmail($_POST['Email']);
            $connection->setPassword($_POST['Password']);  
            $Email=$connection->getEmail();
            $Password= $connection->getPassword(); 
           
            $sql="SELECT * FROM inscription_admin WHERE Email LIKE ? AND Password LIKE ? ";
            $result=$connection->GetData($sql);
            $result->execute([$Email,$Password]);
            $res= $result->fetch();
           
            
            if($res)
            {   
              session_start();
               
              $_SESSION['nom']=$res['Nom'];
             
              header('location: home_admin.php');
             
              
                $alert='';
            }
             
            
            else 
            {
                
                $alert= '<div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                     vos information sont incorrects veuillez vérifiez votre email ou mot de passe!! 
                    </div>
                </div>';
                
               

            }
          }
?>

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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
    <title>connexion-client</title>

</head>
<style>
 @media screen and (max-width: 1200px)
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
 .parsley-errors-list
  {
    color: red;
  } 
  .session
  {
    display: none;
  }
   
</style>

<body>
<?php include('sidebar.php') ?>


<section class="container">

<div class=" row ">
                  <img  src="admin2.svg" style="max-width:500px ;" alt="">
    </div>
   <div class="row  mt-5">
  


    <div class="card col-sm-10 col-md-10 col-lg-6  shadow-lg p-3 mb-5 bg-body rounded" style="max-height:300px ;" >
          <div class="card-body " >
          <form data-parsley-validate method="POST">
          <div class="mb-3">
                   
                   <input type="email" name="Email" required data-parsley-requided="true" placeholder="Adresse Email" data-parsley-trigger="change" class="form-control" id="exampleInputEmail2">
                   
         </div>

                 <div class="mb-3">
                  
                   <input type="password" name="Password" required data-parsley-requided="true" class="form-control" data-parsley-trigger="change" placeholder="Password" id="exampleInputPassword1">
                 </div>

                      <?php echo $alert; ?>

                      <button type="submit" name="login" class="btn mt-3 btn-primary">Se connecter</button>
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
<script type="text/javascript" src="parsly_fr.js"></script>