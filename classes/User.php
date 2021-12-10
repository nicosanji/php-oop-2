<?php
require_once __DIR__ . "/../traits/UtiTrait.php";
class User
{
  protected $userName;
  protected $surname;
  protected $cart = [];

  // trait
  use UtiTrait;

  // costruttore
  function __construct($_user)
  {
    if (array_key_exists("name", $_user)) {
      // "cattura" e modifica errore (crea eccezione)
      try {
        $this->setUserName($_user["name"]);
      } catch (Exception $e) {
        // mostra errore
        echo ($e->getMessage() . "<br>");
      }
    }

    if (array_key_exists("surname", $_user)) {
      $this->setSurname($_user["surname"]);
    }
  }

  // setter
  public function setUserName($value)
  {
    if (strlen($value) < 3) {
      // "cattura" e modifica errore (crea eccezione)
      throw new Exception("Error Exception = Invalid Username");
    } else {
      $this->userName = $this->utiMethods($value);
    }
  }

  public function setSurname($value)
  {
    $this->surname = $this->utiMethods($value);
  }

  public function setCart($value)
  {
    $this->cart = $value;
  }

  // getter
  public function getUserName()
  {
    return $this->userName;
  }

  public function getSurname()
  {
    return $this->surname;
  }

  public function getCart()
  {
    return $this->cart;
  }

  // function "aggiungi al carrello"
  public function addToCart($value)
  {
    $this->cart[] = $value;
  }
}
