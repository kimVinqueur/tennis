<?php

/**
 * Created by PhpStorm.
 * User: kvinqueur
 * Date: 13/04/16
 * Time: 15:52
 */
class Game
{
    private $id;
    private $date;

    /**
     * Game constructor.
     * @param Score $score
     * @internal param $id
     */
    public function __construct()
    {
        $this->score = new Score();
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}