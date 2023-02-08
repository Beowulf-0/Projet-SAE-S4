<?php

use Doctrine\ORM\Mapping;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;

/**
 * @Entity
 * @Table(name="categoriealiment")
 */
class CategorieAliment
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $idCategorie;

    /**
     * @Column(type="string", length=100, unique=true)
     */
    private $NomCategorie;
}