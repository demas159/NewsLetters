<?php

namespace Rytis\NewsLettersBundle\Entity;

class Letter
{
    protected $ID;
    protected $Name;
    protected $Email;
    protected $Categories = Array( 'Bendros naujienos' => 'Bendros naujienos',
        'KitosNaujienosA' => 'KitosNaujienosA',
        'KitosNaujienosB' => 'KitosNaujienosB',
        'KitosNaujienosC' => 'KitosNaujienosC',
        'KitosNaujienosD' => 'KitosNaujienosD');
    public function getID()
    {
        return $this->ID;
    }

    public function setID($ID)
    {
        $this->ID = $ID;
    }
    public function getName()
    {
        return $this->Name;
    }

    public function setName($Name)
    {
        $this->Name = $Name;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email)
    {
        $this->Email = $Email;
    }

    public function getCategories()
    {
       return $this->Categories;
    }

    public function setCategories($Categories)
    {
        $this->Categories = $Categories;
    }
}