<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="products")
 * @ORM\Entity()
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="BTW")
     */
    private $btw;

    /**
     * @ORM\ManyToOne(targetEntity="StaffGroup")
     * @ORM\JoinColumn(name="staff_group_id", referencedColumnName="staff_group_id")
     */
    private $staff_groups;

    public function getBtw() {
      return $this->btw;
    }

    public function setBtw($value) {
      return $this->btw = $value;  
   }

    public function getStaffGroups() {
      return $this->staff_groups;
    }

    public function setStaffGroups($value) {
      $this->staff_groups = $value;
      return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
