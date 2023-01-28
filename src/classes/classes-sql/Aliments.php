<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="aliments")
 */
class Aliments
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $idAliment;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $LabelAliment;

    /**
     * @ORM\ManyToOne(targetEntity="CategorieAliment", inversedBy="aliments")
     * @ORM\JoinColumn(name="CategorieAliment", referencedColumnName="idCategorie")
     */
    private $categorie;

}