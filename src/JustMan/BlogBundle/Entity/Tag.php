<?php

namespace JustMan\BlogBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Tag")
 * @ORM\HasLifecycleCallbacks
 */
class Tag
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\Column(type="string", length=128)
    */
    protected $title;
    
    public function __toString()
    {
        return $this->title;
    }
}