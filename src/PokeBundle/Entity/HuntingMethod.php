<?php
namespace PokeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Shiny
 *
 * @ORM\Table(name="hunting_method")
 * @ORM\Entity(repositoryClass="PokeBundle\Repository\HuntingMethodRepository")
 */

class HuntingMethod
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
    * @ORM\Column(name="name", type="string", nullable=false)
    */
    private $name;
}