<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Table(name="staff_discounts")
 * @ORM\Entity()
 * @UniqueEntity("min_amount, max_amount")
 */
class StaffDiscount
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $min_amount;

    /**
     * @ORM\Column(type="integer")
     */
    private $max_amount;

    /**
     * @ORM\Column(type="integer")
     */
    private $discount;

    /**
     * @ORM\ManyToOne(targetEntity="StaffGroup")
     * @ORM\JoinColumn(name="staff_group_id", referencedColumnName="staff_group_id")
     */
    private $staff_groups;

    public function getId()
    {
        return $this->id;
    }

    public function getMinAmount(): ?int
    {
        return $this->min_amount;
    }

    public function setMinAmount(int $min_amount): self
    {
        $this->min_amount = $min_amount;

        return $this;
    }

    public function getMaxAmount(): ?int
    {
        return $this->max_amount;
    }

    public function setMaxAmount(int $max_amount): self
    {
        $this->max_amount = $max_amount;

        return $this;
    }

    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function setDiscount(int $discount): self
    {
        $this->discount = $discount;

        return $this;
    }
}
