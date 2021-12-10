<?php
// includi file data e classes necessari
include_once __DIR__ . "../data/data.php";
include_once __DIR__ . "../classes/UserPrime.php";
include_once __DIR__ . "../classes/ProductTech.php";

// mostra elenco utenti e proprietà
echo "<h3>LIST OF USERS</h3>";
foreach ($userData as $user) {

  $singleUser = new UserPrime($user);

  if (!strlen($singleUser->getUserName()) < 3) {
    // controllo (errore/eccezione)
    echo "<p>Name = <strong>" . $singleUser->getUserName() . "</strong></p>";
  }

  if (array_key_exists("discount", $user)) {
    echo "<p>Discount = <strong>" . $singleUser->getDiscount() . "</strong></p>";
  }

  echo "<p>Surname = <strong>" . $singleUser->getSurname() . "</strong></p><hr>";
}

echo "<br><br>";

// mostra elenco prodotti e proprietà
echo "<h3>LIST OF PRODUCTS</h3>";
foreach ($productData as $product) {

  $singleProduct = new ProductTech($product);

  echo "<p>Product Name = <strong>" . $singleProduct->getProductName() . "</strong></p>";

  if (array_key_exists("storage", $product)) {
    echo "<p>Storage = <strong>" . $singleProduct->getStorage() . "</strong></p>";
  }

  echo "<p>Price = <strong>" . $singleProduct->getPrice() . "</strong></p><hr>";
}

echo "<br><br>";

// aggiungi un prodotto causale al carrello
$singleUser->addToCart($productData[rand(0, 3)]);

// mostra utente prime e carrello 
echo "<h3>USER PRIME (random product in cart)</h3>";
var_dump($singleUser);
