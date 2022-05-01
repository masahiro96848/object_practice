<?php

class Robot
{
    private $name = '';

    public function setName($name) 
    {
        $this->name = (string)filter_var($name);
    }

    public function getName()
    {
        return $this->name;
    }


}

    $a = new Robot;
    $a->setName();
    $b = new Robot;
    $b->setName = 'ロボ二郎';

    echo $a->getName();
    echo $b->getName();