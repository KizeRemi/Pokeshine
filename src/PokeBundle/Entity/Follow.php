<?php
namespace PokeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Follow
 *
 * @ORM\Table(name="follow")
 * @ORM\Entity(repositoryClass="PokeBundle\Repository\FollowRepository")
 */
class Follow
{	
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    * @ORM\JoinColumn(name="follower", referencedColumnName="id")
    */
    protected $follower;

    /**
    * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
    * @ORM\JoinColumn(name="user", referencedColumnName="id")
    */
    protected $user;

    /**
    * @ORM\Column(name="date_follow", type="datetime", nullable=false)
    */
    private $dateFollow;

    public function __construct()
    {
        $this->dateFollow = new \Datetime();
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
     * Set dateFollow
     *
     * @param \DateTime $dateFollow
     *
     * @return Follow
     */
    public function setDateFollow($dateFollow)
    {
        $this->dateFollow = $dateFollow;

        return $this;
    }

    /**
     * Get dateFollow
     *
     * @return \DateTime
     */
    public function getDateFollow()
    {
        return $this->dateFollow;
    }

    /**
     * Set follower
     *
     * @param \UserBundle\Entity\User $follower
     *
     * @return Follow
     */
    public function setFollower(\UserBundle\Entity\User $follower = null)
    {
        $this->follower = $follower;

        return $this;
    }

    /**
     * Get follower
     *
     * @return \UserBundle\Entity\User
     */
    public function getFollower()
    {
        return $this->follower;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Follow
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
}
