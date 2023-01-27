<?php


class UtilsTest extends PHPUnit_Framework_TestCase
{
    public function setUp(){
        require_once __DIR__ . '/../src/functions/utils.php';
    }

    public function testGetRandomString()
    {
        $this->assertEquals(10, strlen(Utils::getRandomString(10)));
        $this->assertEquals(20, strlen(Utils::getRandomString(20)));
        $this->assertEquals(30, strlen(Utils::getRandomString(30)));
    }
}
// Développer les tests unitaires pour les fonctions
