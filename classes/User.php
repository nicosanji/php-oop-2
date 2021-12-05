<?php

class User
{
  protected $name;
  protected $surname;
  protected $age;
  protected $payment;

  // costruttore
  function __construct($singleUserData)
  {
    $this->name = $singleUserData["name"];
    $this->surname = $singleUserData["surname"];
    $this->age = $singleUserData["age"];
    $this->payment = $singleUserData["payment"];
  }

  // getter
  public function getUserData($singleUserData)
  {
    return "<h3>User Classic</h3>
            <p><strong>Name = </strong>$singleUserData[name]</p> 
            <p><strong> Surname = </strong>$singleUserData[surname]</p> 
            <p><strong>Age = </strong>$singleUserData[age]</p> 
            <p><strong>Payment = </strong>$singleUserData[payment]</p><hr>";
  }
};
