<?php

class SQL implements ISQL
{
    public function getComptesCategories(): string{
        return "SELECT c.NomCategorie, count(a.IdAliment) as nombreAliments FROM sondes AS s 
        INNER JOIN aliment AS a ON IFNULL(s.Aliment1,-1) = a.IdAliment 
        OR IFNULL(s.Aliment2,-1) = a.IdAliment OR IFNULL(s.Aliment3,-1) = a.IdAliment 
        OR IFNULL(s.Aliment4,-1) = a.IdAliment OR IFNULL(s.Aliment5,-1) = a.IdAliment 
        OR IFNULL(s.Aliment6,-1) = a.IdAliment OR IFNULL(s.Aliment7,-1) = a.IdAliment 
        OR IFNULL(s.Aliment8,-1) = a.IdAliment OR IFNULL(s.Aliment9,-1) = a.IdAliment 
        OR IFNULL(s.Aliment10,-1) = a.IdAliment 
        INNER JOIN categoriealiment AS c ON a.CategorieAliment = c.IdCategorie
        GROUP BY a.CategorieAliment;";
    }

    public function getEstBio(): string{
        return "SELECT IF(c.idCategorie = 12, 'Bio', 'Non bio') as BioOuPas, count(a.IdAliment) as nombreAliments FROM sondes AS s 
        INNER JOIN aliment AS a 
        ON IFNULL(s.Aliment1,-1) = a.IdAliment 
        OR IFNULL(s.Aliment2,-1) = a.IdAliment 
        OR IFNULL(s.Aliment3,-1) = a.IdAliment 
        OR IFNULL(s.Aliment4,-1) = a.IdAliment 
        OR IFNULL(s.Aliment5,-1) = a.IdAliment 
        OR IFNULL(s.Aliment6,-1) = a.IdAliment 
        OR IFNULL(s.Aliment7,-1) = a.IdAliment 
        OR IFNULL(s.Aliment8,-1) = a.IdAliment 
        OR IFNULL(s.Aliment9,-1) = a.IdAliment OR IFNULL(s.Aliment10,-1) = a.IdAliment INNER JOIN categoriealiment AS c ON a.CategorieAliment = c.IdCategorie GROUP BY BioOuPas;";
    }

    public function getEstVegan(): string{
        return "SELECT IF(c.idCategorie = 13, 'Végan', 'Non végan') as VeganOuPas, count(a.IdAliment) as nombreAliments FROM sondes AS s 
        INNER JOIN aliment AS a 
        ON IFNULL(s.Aliment1,-1) = a.IdAliment 
        OR IFNULL(s.Aliment2,-1) = a.IdAliment 
        OR IFNULL(s.Aliment3,-1) = a.IdAliment 
        OR IFNULL(s.Aliment4,-1) = a.IdAliment 
        OR IFNULL(s.Aliment5,-1) = a.IdAliment 
        OR IFNULL(s.Aliment6,-1) = a.IdAliment 
        OR IFNULL(s.Aliment7,-1) = a.IdAliment 
        OR IFNULL(s.Aliment8,-1) = a.IdAliment 
        OR IFNULL(s.Aliment9,-1) = a.IdAliment OR IFNULL(s.Aliment10,-1) = a.IdAliment INNER JOIN categoriealiment AS c ON a.CategorieAliment = c.IdCategorie GROUP BY VeganOuPas;";
    }

    public function getAllCategorieAliments(): string
    {
        return "Select * from categoriealiment;";
    }

    public function getAllAlimentsCategorie($numCategorie): string
    {
        return "SELECT * FROM aliment WHERE CategorieAliment=" . $numCategorie . ";";
    }
}