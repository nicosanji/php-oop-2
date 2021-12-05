<?php
// importo "user"
require __DIR__ . "/user.php";
// estendo "user"
class UserPrime extends User
{
  protected $deliveryCost;
  // costruttore
  function __construct($singleUserData)
  {
    parent::__construct($singleUserData);
    $this->setDeliveryCost($singleUserData);
    // mostra user prime
    echo $this->getUserPrimeData($singleUserData);
  }
  // setter
  protected function setDeliveryCost($singleUserData)
  {
    if ($singleUserData["prime"]) {
      $this->setDeliveryCost = 0;
    } else {
      $this->setDeliveryCost = 10;
    }
  }
  // getter
  protected function getUserPrimeData($singleUserData)
  {
    return  "<h3>User Prime</h3>
             <p><strong>Name = </strong>$singleUserData[name]</p> 
             <p><strong> Surname = </strong>$singleUserData[surname]</p> 
             <p><strong>Age = </strong>$singleUserData[age]</p> 
             <p><strong>Payment = </strong>$singleUserData[payment]</p>
             <p><strong>Delivery = </strong>$this->setDeliveryCost</p><hr>";
  }
}
