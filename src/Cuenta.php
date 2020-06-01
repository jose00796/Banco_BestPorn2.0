<?php

class Cuenta 
{
    protected $n_account;
    protected $money;
    protected $active = false;
    protected $bonus;

    public function GenAccount($long = 20)
    {
        $character = '0123456789';
        $characterLenght = strlen($character);
        $this->n_account = '';

        for ($i=0; $i < $long; $i++) { 
            $this->n_account .= $character[rand(0, $characterLenght -1)];    
        }
        return $this->n_account;
    }

    public function GetAccount()
    {
        $this->GenAccount();
        Show("<strong>N_Cuenta</strong> -- 0107 - {$this->n_account} <hr>");
    }

    public function Review()
    {
        return $this->money;
    }

    public function Transfer(Cuenta $user, $coin) //ESTO NO VA ASI, LA IDEA ES QUE LA DEPENDENCIA SEA DE LA CLASE CIUDADANO... 
    {
        $this->SetMoney($this->money - $coin);

        $user->SetMoney($user->money + $coin);
    }

    public function SetMoney($coin)
    {
        $this->money = $coin;
    }


    public function Deposit($coin)
    {
        $this->SetMoney($this->money + $coin);
    }
}
