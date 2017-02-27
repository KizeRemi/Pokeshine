<?php

namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

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

    public function __construct()
    {
        parent::__construct();
        // your own logic
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
}
