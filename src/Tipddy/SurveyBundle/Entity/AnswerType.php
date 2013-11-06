<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnswerType
 *
 * @ORM\Table(name="tipsurvey_answertype")
 * @ORM\Entity
 */
class AnswerType {
	/**
	 * @var bigint $id
	 *
	 * @ORM\Column(name="id", type="smallint", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	private $id;

	/**
	 * @ORM\Column(name="etiqueta", type="string", length=255, nullable=false)
	 *
	 */
	private $etiqueta;    

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="answerType", cascade={"all"})
     *
     */
    protected $questions;

    /**
     * Constructor
     */
    public function __construct() {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set etiqueta
	 *
	 * @param string $etiqueta
	 * @return AnswerType
	 */
	public function setEtiqueta($etiqueta) {
		$this->etiqueta = $etiqueta;

		return $this;
	}

	/**
	 * Get etiqueta
	 *
	 * @return string 
	 */
	public function getEtiqueta() {
		return $this->etiqueta;
	}
    
    /**
     * Add questions
     *
     * @param \Tipddy\SurveyBundle\Entity\Question $questions
     * @return AnswerType
     */
    public function addQuestion(\Tipddy\SurveyBundle\Entity\Question $questions) {
        $this->questions[] = $questions;
    
        return $this;
    }

    /**
     * Remove questions
     *
     * @param \Tipddy\SurveyBundle\Entity\Question $questions
     */
    public function removeQuestion(\Tipddy\SurveyBundle\Entity\Question $questions) {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions() {
        return $this->questions;
    }
}