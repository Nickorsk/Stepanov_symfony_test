<?php

namespace Stepanov\MarketBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductCategory
 */
class ProductCategory
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Stepanov\MarketBundle\Entity\Product
     */
    private $product;

    /**
     * @var \Stepanov\MarketBundle\Entity\Category
     */
    private $category;


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
     * Set Product
     *
     * @param \Stepanov\MarketBundle\Entity\Product $product
     * @return ProductCategory
     */
    public function setProduct(\Stepanov\MarketBundle\Entity\Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Stepanov\MarketBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set category
     *
     * @param \Stepanov\MarketBundle\Entity\Category $category
     * @return ProductCategory
     */
    public function setCategory(\Stepanov\MarketBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Stepanov\MarketBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
