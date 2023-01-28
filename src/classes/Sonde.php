<?php

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\UniqueConstraint;

/**
 * @Entity
 * @Table(name="sondes",
 *    uniqueConstraints={
 *        @UniqueConstraint(name="UC_Sonde", columns={"NomSonde", "PrenomSonde", "DateNaissance"}),
 *        @UniqueConstraint(name="Tel", columns={"Tel"})
 *    }
 * )
 */
class Sondes
{
    /**
     * @var int
     *
     * @Id
     * @Column(name="IdSonde", type="integer")
     * @GeneratedValue
     */
    private $idSonde;

    /**
     * @var string
     *
     * @Column(name="NomSonde", type="string", length=60)
     */
    private $nomSonde;

    /**
     * @var string
     *
     * @Column(name="PrenomSonde", type="string", length=60)
     */
    private $prenomSonde;

    /**
     * @var date
     *
     * @Column(name="DateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @Column(name="Adresse", type="string", length=200, nullable=true)
     */
    private $adresse;

    /**
     * @var int
     *
     * @Column(name="CodePostal", type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @Column(name="Ville", type="string", length=60)
     */
    private $ville;

    /**
     * @var string
     *
     * @Column(name="Tel", type="string", length=15)
     */
    private $tel;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment1", referencedColumnName="IdAliment")
     */
    private $aliment1;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment2", referencedColumnName="IdAliment")
     */
    private $aliment2;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment3", referencedColumnName="IdAliment")
     */
    private $aliment3;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment4", referencedColumnName="IdAliment")
     */
    private $aliment4;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment5", referencedColumnName="IdAliment")
     */
    private $aliment5;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment6", referencedColumnName="IdAliment")
     */
    private $aliment6;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment7", referencedColumnName="IdAliment")
     */
    private $aliment7;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment8", referencedColumnName="IdAliment")
     */
    private $aliment8;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment9", referencedColumnName="IdAliment")
     */
    private $aliment9;

    /**
     * @ManyToOne(targetEntity="Aliments")
     * @JoinColumn(name="Aliment10", referencedColumnName="IdAliment")
     */
    private $aliment10;
}
