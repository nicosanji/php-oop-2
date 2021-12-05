<?php
// importo "data"
include_once  __DIR__ . "/data/userData.php";
include_once  __DIR__ . "/data/productData.php";
// importo "classes"
include_once __DIR__ . "/classes/UserPrime.php";
include_once __DIR__ . "/classes/Product.php";

foreach ($users as  $userData) {
  if (array_key_exists('prime', $userData)) {
    $singleUserPrime = new UserPrime($userData);
  } else {
    $singleUser = new User($userData);
    // mostra echo
    echo $singleUser->getUserData($userData);
  }
}

foreach ($products as $key => $value) {
  $singleProduct = new Product();
  // setter
  $singleProduct->setProductData($key, $value["description"]);
  // mostra var_dump
  var_dump($singleProduct);
}
