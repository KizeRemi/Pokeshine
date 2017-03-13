<?php
namespace PokeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Shiny
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="PokeBundle\Repository\CommentRepository")
 */
class Comment
{	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */

    protected $id;
    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    * @ORM\JoinColumn(name="user", referencedColumnName="id")
    */
    protected $user;

    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    * @ORM\JoinColumn(name="sendBy", referencedColumnName="id")
    */
    protected $sendBy;

    /**
    * @ORM\ManyToOne(targetEntity="PokeBundle\Entity\Shiny")
    * @ORM\JoinColumn(name="shiny", referencedColumnName="id")
    */
    protected $shiny;

    /**
     * @ORM\Column(name="message",type="text", length=255, nullable=false)
     * @Assert\Length(
     *      max = 255,
     *      maxMessage = "Le message ne peut pas contenir plus de {{ limit }} caractères"
     * )
     */
    protected $message;

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
     * Set message
     *
     * @param string $message
     *
     * @return Comment
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Comment
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
     * Set sendBy
     *
     * @param \UserBundle\Entity\User $sendBy
     *
     * @return Comment
     */
    public function setSendBy(\UserBundle\Entity\User $sendBy = null)
    {
        $this->sendBy = $sendBy;

        return $this;
    }

    /**
     * Get sendBy
     *
     * @return \UserBundle\Entity\User
     */
    public function getSendBy()
    {
        return $this->sendBy;
    }

    /**
     * Set shiny
     *
     * @param \PokeBundle\Entity\Shiny $shiny
     *
     * @return Comment
     */
    public function setShiny(\PokeBundle\Entity\Shiny $shiny = null)
    {
        $this->shiny = $shiny;

        return $this;
    }

    /**
     * Get shiny
     *
     * @return \PokeBundle\Entity\Shiny
     */
    public function getShiny()
    {
        return $this->shiny;
    }
}
