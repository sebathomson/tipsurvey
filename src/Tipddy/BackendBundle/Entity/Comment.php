<?php

namespace Tipddy\BackendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="tipsurvey_comment")
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="CommentType")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="comment_type_id",    referencedColumnName="id")
     * })
     */
    protected $commentType; 

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Tipddy\SecurityBundle\Entity\User")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="user_id",    referencedColumnName="id")
     * })
     */
    protected $user; 

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
     * Set description
     *
     * @param string $description
     * @return Comment
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set commentType
     *
     * @param \Tipddy\BackendBundle\Entity\CommentType $commentType
     * @return Comment
     */
    public function setCommentType(\Tipddy\BackendBundle\Entity\CommentType $commentType = null)
    {
        $this->commentType = $commentType;
    
        return $this;
    }

    /**
     * Get commentType
     *
     * @return \Tipddy\BackendBundle\Entity\CommentType 
     */
    public function getCommentType()
    {
        return $this->commentType;
    }

    /**
     * Set user
     *
     * @param \Tipddy\SecurityBundle\Entity\User $user
     * @return Comment
     */
    public function setUser(\Tipddy\SecurityBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Tipddy\SecurityBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}