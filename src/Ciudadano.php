<?php

class Ciudadano
{
    protected $name;
    protected $CI;

    public function __construct($name, $CI)
    {
        $this->name = $name;
        $this->CI = $CI;
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
