<?php

use Doctrine\ORM\Mapping;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;


/**
 * @Entity
 * @Table(name="aliments")
 */
class Aliments
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $idAliment;

    /**
     * @Column(type="string", length=200)
     */
    private $LabelAliment;

    /**
     * @ManyToOne(targetEntity="CategorieAliment", inversedBy="aliments")
     * @JoinColumn(name="CategorieAliment", referencedColumnName="idCategorie")
     */
    private $categorie;
}
