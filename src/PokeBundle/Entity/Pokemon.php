<?php
namespace PokeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File as File;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon")
 * @ORM\Entity(repositoryClass="PokeBundle\Repository\PokemonRepository")
 * @Vich\Uploadable
 */

class Pokemon
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\Column(name="number", type="integer", nullable=false, unique=true)
    */
    private $number;

    /**
    * @ORM\Column(name="generation", type="integer", nullable=false)
    */
    private $generation;
    
    /**
    * @ORM\Column(name="name", type="string", nullable=false)
    */
    private $name;

    /**
    * @ORM\Column(name="description", type="text", nullable=false)
    */
    private $description;

    /**
    * @Gedmo\Slug(fields={"name"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;

    /**
     * @Assert\File(
     *     maxSize="200k",
     *     mimeTypes={"image/png", "image/jpeg", "image/jpeg"}
     * )
     * @Vich\UploadableField(mapping="pokemon_secret_image", fileNameProperty="secretPathName")
     * 
     * @var File
     */
    private $secretImgFile;

    /**
    * @ORM\Column(name="secret_path_name", type="string", nullable=true)
    */
    private $secretPathName;

    /**
     * @Assert\File(
     *     maxSize="200k",
     *     mimeTypes={"image/png", "image/jpeg", "image/jpeg"}
     * )
     * @Vich\UploadableField(mapping="pokemon_shiny_image", fileNameProperty="shinyPathName")
     * 
     * @var File
     */
    private $shinyImgFile;

    /**
    * @ORM\Column(name="shiny_path_name", type="string", nullable=true)
    */
    private $shinyPathName;

    /**
    * @ORM\Column(name="date_creation", type="datetime", nullable=true)
    */
    private $dateCreation;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
    * @ORM\ManyToMany(targetEntity="PokemonType", cascade={"persist"})
    * @Assert\NotNull()
    * @Assert\Count(
    *      min = 1,
    *      max = 2,
    *      minMessage = "Vous devez spécifier au moins {{ limit }} type",
    *      maxMessage = "Vous ne pouvez sépcifier plus de {{ limit }} types"
    * )
    */
    private $pokemonTypes;

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
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Pokemon
     */
    public function setSecretImgFile(File $image = null)
    {
        $this->secretImgFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getSecretImgFile()
    {
        return $this->secretImgFile;
    }    

    /**
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Pokemon
     */
    public function setShinyImgFile(File $image = null)
    {
        $this->shinyImgFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTimeImmutable();
        }

        return $this;
    }

    /**
     * @return File|null
     */
    public function getShinyImgFile()
    {
        return $this->shinyImgFile;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Pokemon
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Pokemon
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Pokemon
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Pokemon
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
     * Add pokemonType
     *
     * @param \PokeBundle\Entity\PokemonType $pokemonType
     *
     * @return Pokemon
     */
    public function addPokemonType(\PokeBundle\Entity\PokemonType $pokemonType)
    {
        $this->pokemonTypes[] = $pokemonType;

        return $this;
    }

    /**
     * Remove pokemonType
     *
     * @param \PokeBundle\Entity\PokemonType $pokemonType
     */
    public function removePokemonType(\PokeBundle\Entity\PokemonType $pokemonType)
    {
        $this->pokemonTypes->removeElement($pokemonType);
    }

    /**
     * Get pokemonTypes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPokemonTypes()
    {
        return $this->pokemonTypes;
    }

    /**
     * Set secretPathName
     *
     * @param string $secretPathName
     *
     * @return Pokemon
     */
    public function setSecretPathName($secretPathName)
    {
        $this->secretPathName = $secretPathName;

        return $this;
    }

    /**
     * Get secretPathName
     *
     * @return string
     */
    public function getSecretPathName()
    {
        return $this->secretPathName;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Pokemon
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
     * Set generation
     *
     * @param integer $generation
     *
     * @return Pokemon
     */
    public function setGeneration($generation)
    {
        $this->generation = $generation;

        return $this;
    }

    /**
     * Get generation
     *
     * @return integer
     */
    public function getGeneration()
    {
        return $this->generation;
    }

    /**
     * Set shinyPathName
     *
     * @param string $shinyPathName
     *
     * @return Pokemon
     */
    public function setShinyPathName($shinyPathName)
    {
        $this->shinyPathName = $shinyPathName;

        return $this;
    }

    /**
     * Get shinyPathName
     *
     * @return string
     */
    public function getShinyPathName()
    {
        return $this->shinyPathName;
    }
    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
}
