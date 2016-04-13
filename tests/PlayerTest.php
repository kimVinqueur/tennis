<?php

/**
 * Created by PhpStorm.
 * User: kvinqueur
 * Date: 13/04/16
 * Time: 15:24
 */

class PlayerTest extends \PHPUnit_Framework_TestCase
{


    public function testShowFirstname()
    {
        // Create player
        $a = new Player();

        // Add Firstname
        $a->setFirstname("Simon");

        // Assert
        $this->assertEquals("Simon", $a->getFirstname());
    }
    
    public function testShowLastname() {
        // Create player
        $a = new Player();

        // Add Firstname
        $a->setLastname("Sandwidi");

        // Assert
        $this->assertEquals("Sandwidi", $a->getLastname());
    }

}
