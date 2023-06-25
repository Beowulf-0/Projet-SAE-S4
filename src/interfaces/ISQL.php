<?php

interface ISQL
{
    public function getComptesCategories(): string;

    public function getEstBio(): string;

    public function getEstVegan(): string;

    public function getAllCategorieAliments(): string;

    public function getAllAlimentsCategorie($numCategorie): string;
}