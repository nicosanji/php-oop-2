<?php
require __DIR__ . "../Product.php";

class ProductTech extends Product
{
  protected $storage;

  // costruttore
  function __construct($_storage)
  {
    // costruttore "parent" Product.php
    parent::__construct($_storage);

    if (array_key_exists("storage", $_storage)) {
      $this->setStorage($_storage["storage"]);
    }
  }

  // setter
  public function setStorage($value)
  {
    $this->storage = $value;
  }

  // getter
  public function getStorage()
  {
    return $this->storage;
  }
}
