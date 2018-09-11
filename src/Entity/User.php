<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 6/09/18
 * Time: 22:01
 */

namespace App\Entity;

use Doctrine\ORM\Mapping        as ORM;
use FOS\UserBundle\Model\User   as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }
}