<?php
include('Client.php');
class Colis extends Dbconnect
{
    public $id;
    public $Des;
    public $Statut;
    public $Tel_Des;
    public $Ville_Des; 
    public $Adresse_Des;
    public $Disponibilité;
    public $Produit;
    public $Poids;
    public $Prix;
    public $Date_C;
    public $Etat;
    public $Nom_Bus;
    public $date;


   
    public function setIdClient($id)
    {

       
        $this->id=$id;
    }

    public function setDes($Des)
    {
         $this->Des=$Des;
    }

    public function setStatut($Statut)
    {
         $this->Statut=$Statut;
    }

   
    public function setTel_Des($Tel_Des)
    {
         $this->Tel_Des=$Tel_Des;
    }

    public function setVille_Des($Ville_Des)
    {
         $this->Ville_Des=$Ville_Des;
    }
    public function setAdresse_Des($Adresse_Des)
    {
         $this->Adresse_Des=$Adresse_Des;
    }

    public function setDisponibilité($Disponibilité)
    {
         $this->Disponibilité=$Disponibilité;
    }

    public function setProduit($Produit)
    {
         $this->Produit=$Produit;
    }
    
    
    public function setPoids($Poids)
    {
         $this->Poids=$Poids;
    }
    
    
    public function setPrix($Prix)
    {
         $this->Prix=$Prix;
    }
     
    public function setDate_C($Date_C)
    {
         $this->Date_C=$Date_C;
    }
    
    
    public function setEtat($Etat)
    {
         $this->Etat=$Etat;
    }
    
    
    public function setNom_Bus($Nom_Bus)
    {
         $this->Nom_Bus=$Nom_Bus;
    }
    





      
    public function getIdClient()
    {

      
           
        return $this->id;
    }

    public function getDes()
    {
        return $this->Des;
    }

    public function getStatut()
    {
        return $this->Statut;
    }

   
    public function getTel_Des()
    {
        return $this->Tel_Des;
    }

    public function getVille_Des()
    {
        return $this->Ville_Des;
    }
    public function getAdresse_Des()
    {
        return $this->Adresse_Des;
    }

    public function getDisponibilité()
    {
        return $this->Disponibilité;
    }

    public function getProduit()
    {
        return $this->Produit;
    }
    
    
    public function getPoids()
    {
        return $this->Poids;
    }
    
    
    public function getPrix()
    {
        return $this->Prix;
    }
     
    public function getDate_C()
    {
        return $this->Date_C;
    }
    
    
    public function getEtat()
    {
        return $this->Etat;
    }
    
    
    public function getNom_Bus()
    {
         return $this->Nom_Bus;
    }
    
    
    
  public function insert()
  {

    try {

      $sql = "INSERT INTO colis VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)";
      $prepare = $this->GetData($sql);
     
     
      $prepare = $prepare->execute([$this->getDes(), $this->getStatut(), $this->getTel_Des(), $this->getVille_Des(), $this->getAdresse_Des(), $this->getDisponibilité(), $this->getProduit(), $this->getPoids(),$this->getPrix(), date('l j F Y, H:i'),'---',$this->getIdClient()]);
      
    
      if ($prepare) {
        header('location:colis_client.php');
      } else echo 'erreur!!!!';
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }

  public function affichNvColis()
  {
      $sql="SELECT * FROM colis WHERE id_client LIKE ?";
      $this->setIdClient($_SESSION['id_client']);
      $prepare=$this->GetData($sql);
      $param=$this->getIdClient();
      $prepare->execute([$param]);
      return $prepare->fetchAll();
  }
}