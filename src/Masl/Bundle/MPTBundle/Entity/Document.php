<?php
namespace Masl\Bundle\MPTBundle\Entity;

//�������� �� ���������� ������
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