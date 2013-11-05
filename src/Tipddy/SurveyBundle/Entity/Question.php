<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="tipsurvey_question")
 * @ORM\Entity
 */
class Question {
	/**
	 * @var bigint $id
	 *
	 * @ORM\Column(name="id", type="bigint", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	protected $id;

	/**
	 * @ORM\Column(name="question", type="text")
	 */
	protected $question;

    /**
     * @ORM\Column(name="description", type="text")
	 */
    protected $description;


	/**
	 * @ORM\Column(name="random_order", type="boolean")
	 */
	protected $randomOrder;  //respuestas en orden randomico.
	
	/**
	 * @ORM\Column(name="question_required", type="boolean")
	 */
	protected $questionRequired;    

    /**
     * 
	 * @ORM\ManyToOne(targetEntity="Survey", inversedBy="questions")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="survey_id",  referencedColumnName="id")
	 * })
	 */
    protected $survey;

	/**
	 * 
	 * @ORM\ManyToOne(targetEntity="QuestionType")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="questiontype_id", referencedColumnName="id")
	 * })
	 */
	protected $questionType;
	
	/**
	 * 
	 * @ORM\ManyToOne(targetEntity="AnswerType")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="answertype_id", referencedColumnName="id")
	 * })
	 */
	protected $answerType;

    /**
     * @ORM\OneToMany(targetEntity="Answer", mappedBy="question", cascade={"all"} , orphanRemoval=true)
     */
    protected $answers;
}
