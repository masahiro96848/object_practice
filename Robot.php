<?php

class Robot
{
    private $name = '';

    // コンストラクタ
    public function __construct($name)
    {
        $this->setName($name);
    }

    public function setName($name) 
    {
        $this->name = (string)filter_var($name);
    }

    public function getName()
    {
        return $this->name;
    }


}

    $a = new Robot('テスト1'); 
    // $a->setName();
    $b = new Robot('テスト2');
    // $b->setName = 'ロボ二郎';

    echo $a->getName();
    echo $b->getName();