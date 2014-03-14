<?php
/**
 * Created by PhpStorm.
 * User: s.krebs
 * Date: 14.03.14
 * Time: 12:58
 */
namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class User {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $fullName;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected  $startNumber;
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param mixed $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @param mixed $startNumber
     */
    public function setStartNumber($startNumber)
    {
        $this->startNumber = $startNumber;
    }

    /**
     * @return mixed
     */
    public function getStartNumber()
    {
        return $this->startNumber;
    }


}