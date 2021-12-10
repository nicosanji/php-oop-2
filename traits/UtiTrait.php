<?php
//utilizzo il trait per fare una function di tipo utility
trait UtiTrait
{
  public function utiMethods($value)
  {
    // ucfirst -> rendi maiuscolo il primo carattere di una stringa
    return ucfirst($value);
  }
}
