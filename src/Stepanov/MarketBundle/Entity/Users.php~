<?php
/**
 * Created by PhpStorm.
 * User: nickolay
 * Date: 23.01.14
 * Time: 21:59
 */

namespace Stepanov\MarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="_users")
 */

class Users extends BaseUser
{

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

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
     * Set FIO
     *
     * @param string $fIO
     * @return Users
     */


	public function __construct()
	{
		parent::__construct();
		// your own logic

	}

}
