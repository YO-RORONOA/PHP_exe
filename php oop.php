<?php

class utilisateur{
    protected $name;
    protected $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName()
    {
        $this->name;
    }

    public function getEmail()
    {
        $this->email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function displaydetails()
    {
        echo $this->name;
        echo $this->email;
    }

}


class Administrateur extends utilisateur
{
    protected $role;

    public function __construct($role, $name, $email)
    {
        $this->role = $role;
        $this->name = $name;
        $this->email = $email;
    }

    public function getRole()
    {
        $this->role;
    }
    public function getName()
    {
        $this->name;
    }

    public function getEmail()
    {
        $this->email;
    }


    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }


    public function displayrole()
    {
        echo $this->role;
    }
}


class Autheur extends utilisateur
{
    private $biographie;


    public function __construct($name, $email, $biographie)
    {
        $this->name = $name;
        $this->email = $email;
        $this->biographie = $biographie;
    }

    public function getBiographie()
    {
        $this->biographie;
    }

    public function setBiographie($biographie)
    {
        $this->biographie= $biographie;
    }

    public function displayAuthor()
    {
        $this->displaydetails();
        echo $this->biographie;
    }

    public function addarticle($titre, $contenu)
    {
        $article = new Article($titre, $contenu, null, $auteur=$this->name);
        
        return $article;
    }


}


class Article
{
    protected $titre;
    protected $contenu;
    protected $datePublication;
    protected Autheur $auteur; 


    public function __construct($titre, $contenu, $datePublication, $auteur)
    {
        $this->titre = $titre;
        $this->contenu = $contenu;
        $this->datePublication = $datePublication;
        $this->auteur = $auteur;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function getDatePublication()
    {
        return $this->datePublication;
    }

    public function getAuteur()
    {
        return $this->auteur;
    }


    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function setDatePublication($datepublication)
    {
        $this->datePublication = $datepublication;
    }

    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    public function displaydetails()
    {
        echo $this->titre;
        echo $this->contenu;
        echo $this->datePublication;
        echo $this->auteur;
    }

    
}




$admin = new Administrateur('manager', 'youness', 'youness@gmail.com');
$auteur = new Autheur('amine', 'amine@gmail.com', 'its ame mario');



