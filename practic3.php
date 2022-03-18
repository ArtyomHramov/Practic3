<?php

abstract class Client
{
    private int $Zero=0;
    abstract protected function zeroShower();
    public function showZero()
    {
        echo $this->Zero;
    }

}


interface Human 
{
    public function method1();
    public function method2();
}

class User extends Client implements Human
{
    public string $username;
    private const CNST='Const';
    public const otherCNST='Go';
    private static $STAT='ant';
    public $notSTAT='vDotu';

    function __construct(string $user)
    {
        $this->username=$user;
        echo 'Родился юзер '.$user.'<br/>';
    }

    function __destruct()
    {
        echo $this->username.' умер, земля ему пухом<br/>';
    }

    public function zeroShower()
    {
        $this->showZero();
    }
    public function showPrivates()
    {
        echo self::CNST, self::$STAT. '<br/>';
    }

    public function method1()
    {
        echo self::otherCNST . $this->notSTAT . '<br/>';
    }

    public function method2()
    {
        echo $this->zeroShower();
    }
}

$obj= new User('Боря');

echo $obj->showPrivates();
echo $obj->method1();
echo $obj->zeroShower();


?>
