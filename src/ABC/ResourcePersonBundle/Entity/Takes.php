<?php

namespace ABC\ResourcePersonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Takes
 */
class Takes
{
    /**
     * @var integer
     */
    private $studentId;

    /**
     * @var \ABC\ResourcePersonBundle\Entity\Session
     */
    private $session;

    /**
     * @var \ABC\ResourcePersonBundle\Entity\Course
     */
    private $course;


    /**
     * Set studentId
     *
     * @param integer $studentId
     * @return Takes
     */
    public function setStudentId($studentId)
    {
        $this->studentId = $studentId;
    
        return $this;
    }

    /**
     * Get studentId
     *
     * @return integer 
     */
    public function getStudentId()
    {
        return $this->studentId;
    }

    /**
     * Set session
     *
     * @param \ABC\ResourcePersonBundle\Entity\Session $session
     * @return Takes
     */
    public function setSession(\ABC\ResourcePersonBundle\Entity\Session $session)
    {
        $this->session = $session;
    
        return $this;
    }

    /**
     * Get session
     *
     * @return \ABC\ResourcePersonBundle\Entity\Session 
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set course
     *
     * @param \ABC\ResourcePersonBundle\Entity\Course $course
     * @return Takes
     */
    public function setCourse(\ABC\ResourcePersonBundle\Entity\Course $course = null)
    {
        $this->course = $course;
    
        return $this;
    }

    /**
     * Get course
     *
     * @return \ABC\ResourcePersonBundle\Entity\Course 
     */
    public function getCourse()
    {
        return $this->course;
    }
}
