<?php
// dati utenti
$userData = [
  [
    "name" => "mario",
    "surname" => "rossi",
    "cart" => []
  ],
  [
    "name" => "gi", // errore (exception)
    "surname" => "verdi",
    "cart" => []
  ],
  [
    "name" => "luisa", // user prime
    "surname" => "bianchi",
    "cart" => [],
    "discount" => 50 . "%",
  ],
];

// dati prodotti
$productData = [
  [
    "productName" => "Dishwasher",
    "price" => 720 . " €.",
  ],
  [
    "productName" => "Work Station",
    "price" => 950 . " €.",
  ],
  [
    "productName" => "Notebook",
    "storage" => 200 . " GB", // product tech
    "price" => 430 . " €.",
  ],
  [
    "productName" => "Smartphone",
    "storage" => 120 . " GB", // product tech
    "price" => 350 . " €.",
  ],
];
