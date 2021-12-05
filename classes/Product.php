<?php
class Product
{
  protected $productName;
  protected $description;
  // setter
  public function setProductData($_productName, $_description)
  {
    $this->productName = $_productName;
    $this->description = $_description;
  }
}
