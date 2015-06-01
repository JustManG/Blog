<?php
namespace Masl\Bundle\MPTBundle\Entity;

//отвечает за управление файлом
class Document
{
    private $name;
    
    public function getName()
    {
        return $this->name;
    }
    
    public function setName($value)
    {
        $this->name = $value;
    }
}