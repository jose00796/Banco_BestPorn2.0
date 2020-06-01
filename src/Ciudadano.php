<?php

class Ciudadano
{
    protected $name;
    protected $CI;
    public $account;
    public $coin;

    public function __construct($name, $CI, Cuenta $account = null)
    {
        $this->name = $name;
        $this->CI = $CI;
        $this->account = $account;

        Show("{$this->GetName()}");
        $this->account->GetAccount();
    }

    public function GetName()
    {
        return $this->name;
    }

    public function GetCI()
    {
        return $this->CI;
    }
}
