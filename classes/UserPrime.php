<?php
include_once __DIR__ . "/User.php";
class UserPrime extends User
{
  protected $discount;

  // costruttore
  function __construct($_discount)
  {
    // costruttore "parent"
    parent::__construct($_discount);

    if (array_key_exists("discount", $_discount)) {
      $this->setDiscount($_discount["discount"]);
    }
  }

  // setter
  public function setDiscount($value)
  {
    $this->discount = $value;
  }

  // getter
  public function getDiscount()
  {
    return $this->discount;
  }
}
