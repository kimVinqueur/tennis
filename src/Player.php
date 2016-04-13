<?php

/**
 * Created by PhpStorm.
 * User: kvinqueur
 * Date: 13/04/16
 * Time: 15:14
 */
class Player
{
    /**
     * @var
     */
    private $id;
    /**
     * @var
     */
    private $firstname;
    /**
     * @var
     */
    private $lastname;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }


}