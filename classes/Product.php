<?php
class Product
{
  protected $productName;
  protected $price;

  // costruttore
  function __construct($_product)
  {
    if (array_key_exists("productName", $_product)) {
      $this->setProductName($_product["productName"]);
    }

    if (array_key_exists("price", $_product)) {
      $this->setPrice($_product["price"]);
    }
  }

  // setter
  public function setProductName($nuovoValore)
  {
    $this->productName = $nuovoValore;
  }

  public function setPrice($nuovoValore)
  {
    $this->price = $nuovoValore;
  }

  // getter
  public function getProductName()
  {
    return $this->productName;
  }

  public function getPrice()
  {
    return $this->price;
  }
}
