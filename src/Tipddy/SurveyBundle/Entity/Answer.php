<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Answer
 *
 * @ORM\Table(name="tipsurvey_answer")
 * @ORM\Entity
 */
class Answer {
	/**
	 * @var bigint $id
	 *
	 * @ORM\Column(name="id", type="bigint", nullable=false)
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="IDENTITY")
	 */
	protected $id;   
	   
	/**
	 * @ORM\Column(name="answer", type="text", nullable=true)
	 */
	protected $answer;        

	/**
	 * @ORM\Column(name="photo", type="string", length=255, nullable=true)
	 */
	protected $photo;

	/**
	 * @ORM\Column(name="video", type="text", nullable=true)
	 */
	protected $video;

	/**
	 * 
	 * @ORM\ManyToOne(targetEntity="Question", inversedBy="answers")
	 * @ORM\JoinColumns({
	 * @ORM\JoinColumn(name="question_id", referencedColumnName="id")
	 * })
	 */
	protected $question;  
}