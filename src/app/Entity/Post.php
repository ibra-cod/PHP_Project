<?php

namespace App\Entity;
use Datetime;

class Post
{
    private int $id;
    private string $Titre;
    private string $Contenu;
    private string $Date; 
    private string $Auteur;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->Titre;
    }
    
    public function getContenu()
    {
        return $this->Contenu;
    }

    public function getAuteur()
    {
        return $this->Auteur;
    }

    public function getDate()
    {
        return $this->Date;
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


    public function setAuteur()
    {
        return $this->auteur;
    }

    public function setDate()
    {
        return $this->date;
    }

    
}