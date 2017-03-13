<?php

namespace PokeBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Level Entity
 * @ORM\Table(name="level")
 * @ORM\Entity(repositoryClass="PokeBundle\Repository\LevelRepository")
 *
 */
class Level
{	
	/**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(name="level",type="integer", length=25, nullable=false)
     */
    protected $level;

    /**
     * @ORM\Column(name="required",type="integer", length=25, nullable=false)
     */
    protected $required;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return Experience
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }
    
    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set required
     *
     * @param integer $required
     *
     * @return Experience
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Get required
     *
     * @return integer
     */
    public function getRequired()
    {
        return $this->required;
    }
}