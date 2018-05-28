<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="staff_groups")
 * @ORM\Entity()
 */
class StaffGroup
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer", name="staff_group_id")
     */
    public $staff_group_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    public function __toString() {
        return $this->name;
    }

    public function getstaff_group_id()
    {
        return $this->staff_group_id;
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
}
