<?php

namespace Tipddy\SurveyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Survey
 *
 * @ORM\Table(name="tipsurvey_survey")
 * @ORM\Entity
 */
class Survey {
    /**
     * @var bigint $id
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    protected $title;
    
    /**
     * @ORM\Column(name="description", type="text")
     */
    protected $description;

    /**
     * @ORM\OneToMany(targetEntity="Question", mappedBy="survey", cascade={"all"})
     */
    protected $questions;
}
