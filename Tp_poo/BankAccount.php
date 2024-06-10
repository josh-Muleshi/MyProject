<?php

final class BankAccount{
    private float $balance = 0; 

    private function __construct(private readonly string $accountNumber){}


    public static function create(string $accountNumber) : self {
        if(empty($accountNumber)) throw new \Exception("");

        return new self($accountNumber);
    }

    public function getbalance(): float {
        return $this->balance;
    }

    public function setmoney(float $amount) {
        //verifie

        if ($amount <= 0) {
            throw new \Exception("votre depot doit etre >= 0");
        }

        $this->balance = $amount;
    }

    public function getmoney(float $amount) {
        //verifie

        if ($amount > $this->balance) {
            throw new \Exception("Votre solde est insifusant");
        }
        $this->balance -= $amount;
    }

    public function getAccountNumber(): string {
        return $this->accountNumber;
    }

    // public function setAccountNumber(string $accountNumber) {
    //     $this->accountNumber = $accountNumber;
    // }

    // private function ensureAccountNumber(string $accountNumber): never {
    //     if ($this->accountNumber===null) {
    //         throw new \Exception("Vous n'avais pas defini votre numero de compte");
    //     }
    // }
}

$amount = BankAccount::create("BA34455");
$amount->getAccountNumber();
$amount->getBalance();
$amount->getmoney(123);
$amount->getmoney(50);

echo $amount->getbalance();