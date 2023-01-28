<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="categoriealiment")
 */
class CategorieAliment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $idCategorie;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $NomCategorie;
}