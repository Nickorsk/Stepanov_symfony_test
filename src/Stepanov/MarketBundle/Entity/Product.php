<?php

namespace Stepanov\MarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     *
     * @Assert\File(maxSize="6000000")
     */
    private $image;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $created_at;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $categories;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Product
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
     * Set image
     *
     * @param UploadedFile $file
     */
    public function setImage(UploadedFile $file = null)
    {
        $this->image = $file;
    }

    /**
     * Get image
     *
     * @return UploadedFile
     */
    public function getImage()
    {
        return $this->image;

    }

	public function uploadImage()
	{
		// the file property can be empty if the field is not required
		if (null === $this->getImage()) {
			return;
		}

		// use the original file name here but you should
		// sanitize it at least to avoid any security issues

		// move takes the target directory and then the
		// target filename to move to
		//die();
		$this->getImage()->move(
			$this->getUploadRootDir(),
			$this->getImage()->getClientOriginalName()
		);

		// set the path property to the filename where you've saved the file
		$this->image = $this->getImage()->getClientOriginalName();


		// clean up the file property as you won't need it anymore
		//$this->image = null;
	}

	public function getUploadRootDir()
	{
		// the absolute directory path where uploaded documents should be saved
		return $this->getTmpUploadRootDir()."images/product/";
	}

	protected function getTmpUploadRootDir()
	{
		// the absolute directory path where uploaded documents should be saved
		return __DIR__ . '/../../../../uploads/';
	}
    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set created_at
     *
     * @param string $createdAt
     * @return Product
     */
    public function setCreatedAt($createdAt)
    {
        $this->created_at = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return string 
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

	public function __toString()
	{
		return $this->name;
	}

    /**
     * Add categories
     *
     * @param \Stepanov\MarketBundle\Entity\Category $categories
     * @return Product
     */
    public function addCategory(\Stepanov\MarketBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \Stepanov\MarketBundle\Entity\Category $categories
     */
    public function removeCategory(\Stepanov\MarketBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
