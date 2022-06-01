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
    <title>home</title>
</head>
<style>
 @media screen and (max-width: 1000px)
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
    <?php include('sidebar.php'); ?>

<div class="d-flex flex-row mb-3">
       

<?php include('side_dash.php'); ?>

<section class="container px-4">
            <div class="row mt-5 gx-5">
                <div class="col-lg-4" >
                <div class="p-3 border shadow-lg p-3 mb-5  rounded " style="background-color: #ACE1AF;"><span class="fs-3 fw-bold font-monospace">Colis à livrer</span><i class="fa fa-2x ms-2 fa-bolt" aria-hidden="true"></i> </div>
                </div>

                <div class="col-lg-4">
                <div class="p-3 border shadow-lg p-3 mb-5  rounded" style="background-color: #FBCEB1;"><span class="fs-3 fw-bold font-monospace">Colis à ramasser</span><i class="fa ms-2 fa-2x fa-cubes" aria-hidden="true"></i></div>
                </div>

                <div class="col-lg-4">
                <div class="p-3 border shadow-lg p-3 mb-5  rounded " style="background-color: #F0E68C;"><span class="fs-3 fw-bold font-monospace">Retours</span><i class="fa ms-2 fa-2x fa-reply" aria-hidden="true"></i></div>
                </div>
            </div>
</section>
</div>

   
</body>
</html>