<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('scriipt.php'); ?>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
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
    
    <div class="card mt-5  shadow-lg p-3 mb-5 bg-body rounded"  >
    <div class="card-body text-end " >
          <form>
          <div class="mb-3">
                        
                        <input required	data-parsley-required="true" minlength="3"	data-parsley-minlength="3"	 type="text" class="form-control" placeholder="Nom" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>

         
              <div class="mb-3">
                   
                        <input type="email" required	data-parsley-required="true"  data-parsley-type="email" placeholder="Adresse Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
              </div>

                <div class="input-group mb-3">
                
                <textarea required	data-parsley-required="true" class="form-control " placeholder="Sujet" aria-label="With textarea"></textarea>
                </div>
                      <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
          </div>

        </div>
    </section>
</div>

</body>
</html>