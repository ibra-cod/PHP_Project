<?php 
    namespace App\Entity;

    class User {
        private $name;
        private $firstname;
        private $email;
        private $is_admin;
        


    public function getName()
    {
        return $this->id;
    }

    public function getfirstName()
    {
        return $this->title;
    }
    
    public function getEmail()
    {
        return $this->content;
    }

    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function settId()
    {
        return $this->id;
    }

    public function setTitle()
    {
        return $this->title;
    }
    
    public function setContent()
    {
        return $this->content;
    }


    public function getAuteur()
    {
        return $this->auteur;
    }

    public function setDate()
    {
        return $this->date;
    }
        
    }



; ?>