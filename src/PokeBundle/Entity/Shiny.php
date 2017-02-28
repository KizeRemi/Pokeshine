<?php
namespace PokeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File as File;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Shiny
 *
 * @ORM\Table(name="shiny")
 * @ORM\Entity(repositoryClass="PokeBundle\Repository\ShinyRepository")
 * @Vich\Uploadable
 */

class Shiny
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
	 * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User", inversedBy="shinies")
	 * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	 */
	private $user;

    /**
     * @ORM\ManyToOne(targetEntity="PokeBundle\Entity\Pokemon")
     * @ORM\JoinColumn(name="pokemon_id", referencedColumnName="id")
     */
    private $pokemon;

    /**
    * @ORM\Column(name="date_capture", type="datetime", nullable=false)
    */
    private $dateCapture;

    /**
    * @ORM\Column(name="date_creation", type="datetime", nullable=false)
    */
    private $dateCreation;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    public function __construct()

    {
        $this->dateCreation = new \Datetime();
        $this->updatedAt = new \DateTimeImmutable();
    }

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
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Shiny
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set dateCapture
     *
     * @param \DateTime $dateCapture
     *
     * @return Shiny
     */
    public function setDateCapture($dateCapture)
    {
        $this->dateCapture = $dateCapture;

        return $this;
    }

    /**
     * Get dateCapture
     *
     * @return \DateTime
     */
    public function getDateCapture()
    {
        return $this->dateCapture;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Shiny
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Shiny
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set pokemon
     *
     * @param \PokeBundle\Entity\Pokemon $pokemon
     *
     * @return Shiny
     */
    public function setPokemon(\PokeBundle\Entity\Pokemon $pokemon = null)
    {
        $this->pokemon = $pokemon;

        return $this;
    }

    /**
     * Get pokemon
     *
     * @return \PokeBundle\Entity\Pokemon
     */
    public function getPokemon()
    {
        return $this->pokemon;
    }
}