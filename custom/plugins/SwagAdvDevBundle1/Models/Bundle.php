<?php

namespace SwagAdvDevBundle1\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Shopware\Components\Model\ModelEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="s_bundles", options={"collate"="utf8_unicode_ci"})
 * 
 */
class Bundle extends ModelEntity
{
    /**
     * @var int
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column()
     */
    protected $name;
    /**
     * @var boolean
     * 
     * @ORM\Column(type="boolean")
     */
    protected $active;

    /**
     * @var string
     * 
     * @ORM\Column()
     */
    protected $products;



    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
    /**
     * @var mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * @var mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @var mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
    /**
     * @var mixed
     */
    public function getProducts()
    {
        return $this->products;
    }

    public function setProducts($products)
    {
        $this->products = $products;
    }
}
