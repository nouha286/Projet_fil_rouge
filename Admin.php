<?php
include('connexion.php');
class Admin extends Dbconnect
{
    public $Nom;
    public $Email;
    public $Password;
    public $id;

   
    public function setId($id)
    {
        $this->id=$id;
    }

    public function setNom($Nom)
    {
         $this->Nom=$Nom;
    }


 

    public function setEmail($Email)
    {
         $this->Email=$Email;
    }

    public function setPassword($Password)
    {
         $this->Password=$Password;
    }
    



    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function getPassword()
    {
        return $this->Password;
    }

    
  public function insert()
  {

    try {

      $sql = "INSERT INTO inscription_admin  VALUES (null,?,?,?)";
      $prepare = $this->GetData($sql);
      $prepare = $prepare->execute([$this->getNom(), $this->getEmail(), $this->getPassword()]);

      if ($prepare) {
        header('location:connexion_admin.php');
      } else echo 'erreur!!!!';
    } catch (PDOException $ex) {
      echo $ex->getMessage();
    }
  }
}