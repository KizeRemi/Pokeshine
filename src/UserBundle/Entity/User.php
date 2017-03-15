<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use PokeBundle\Entity\Pokemon;

/**
 * @ORM\Entity
 * @ORM\Table(name="poke_user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\Column(name="friend_code", type="string", nullable=true)
    */
    private $friendCode;

    /**
     * @ORM\OneToMany(targetEntity="PokeBundle\Entity\Shiny", mappedBy="user")
     */
    private $shinies;

    /**
     * @ORM\Column(name="current_exp", type="integer", length=25, nullable=false)
     */
    protected $currentExp;

    public function __construct()
    {
        parent::__construct();
        $this->currentExp = 1;
        $this->shinies = new ArrayCollection();
    }

    /**
     * Set friendCode
     *
     * @param string $friendCode
     *
     * @return User
     */
    public function setFriendCode($friendCode)
    {
        $this->friendCode = $friendCode;

        return $this;
    }

    /**
     * Get friendCode
     *
     * @return string
     */
    public function getFriendCode()
    {
        return $this->friendCode;
    }

    /**
     * Add shiny
     *
     * @param \PokeBundle\Entity\Shiny $shiny
     *
     * @return User
     */
    public function addShiny(\PokeBundle\Entity\Shiny $shiny)
    {
        $this->shinies[] = $shiny;

        return $this;
    }

    /**
     * Remove shiny
     *
     * @param \PokeBundle\Entity\Shiny $shiny
     */
    public function removeShiny(\PokeBundle\Entity\Shiny $shiny)
    {
        $this->shinies->removeElement($shiny);
    }

    /**
     * Get shinies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getShinies()
    {
        return $this->shinies;
    }

    public function hasPokemon($id){
        $shinies = $this->getShinies();
        foreach($shinies as $shiny){
            $pokemon = $shiny->getPokemon()->getId();
            if($id == $pokemon){
                return $shiny;
            }
        }
        return false;
    }

    /**
     * Set currentExp
     *
     * @param integer $currentExp
     *
     * @return User
     */
    public function setCurrentExp($currentExp)
    {
        $this->currentExp = $currentExp;

        return $this;
    }

    /**
     * Get currentExp
     *
     * @return integer
     */
    public function getCurrentExp()
    {
        return $this->currentExp;
    }
}
