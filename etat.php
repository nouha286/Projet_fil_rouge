<?php 

if(isset($_GET['id_Retour']))
{
    include('Admin.php');
$Admin=new Admin();
    $id=$_GET['id_Retour'];
    $sql="UPDATE colis SET Etat='Retour' WHERE id=?";
    $prepare = $Admin->GetData($sql);
    $prepare= $prepare->execute([$id]);
    header('location:etat_colis.php');
}

if(isset($_GET['id_Livré']))
{
    include('Admin.php');
$Admin=new Admin();
    $id=$_GET['id_Livré'];
    $sql="UPDATE colis SET Etat='Livré' WHERE id=?";
    $prepare = $Admin->GetData($sql);
    $prepare= $prepare->execute([$id]);
    header('location:etat_colis.php');
    
}
if(isset($_GET['id_ramassage']))
{
    include('Admin.php');
$Admin=new Admin();
    $id=$_GET['id_ramassage'];
    $sql="UPDATE colis SET Statut='Ramassé' WHERE id=?";
    $prepare = $Admin->GetData($sql);
    $prepare= $prepare->execute([$id]);
    header('location:demande_ramassage.php');
    
}

if(isset($_GET['id_activer']))
{
    include('Client.php');
    $client=new Client();
    $id=$_GET['id_activer'];
    $sql="SELECT * FROM inscription_client WHERE id=?";
    $prepare = $client->GetData($sql);
     $prepare->execute([$id]);
    $c=$prepare->fetch();
  
    $client->setNom($c['Nom']);
    $client->setNom_business($c['Nom_business']);
    $client->setType_business($c['Type_business']);
    $client->setNumero($c['Numero']);
    $client->setVille($c['Ville']);
    $client->setAdresse($c['Adresse']);
    $client->setEmail($c['Email']);
    $client->setPassword($c['Password']);

    $sql = "INSERT INTO client  VALUES (null,?,?,?,?,?,?,?,?)";
    $prepare = $client->GetData($sql);
    $prepare = $prepare->execute([$client->getNom(), $client->getNom_business(), $client->getType_business(), $client->getNumero(), $client->getVille(), $client->getAdresse(), $client->getEmail(), $client->getPassword()]);

    $sql="DELETE FROM inscription_client WHERE id=?";
    $prepare = $client->GetData($sql);
     $prepare->execute([$id]);

    header('location:nouveaux_inscription.php');
    
}

if(isset($_GET['id_supprimer']))
{
    include('Client.php');
    $client=new Client();
    $id=$_GET['id_activer'];
   
    $sql="DELETE FROM inscription_client WHERE id=?";
    $prepare = $client->GetData($sql);
     $prepare->execute([$id]);

    header('location:nouveaux_inscription.php');
    
}
