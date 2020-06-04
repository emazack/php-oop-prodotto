<?php

echo "Ciao";

// questa è una classe che compone l'oggetto

  class Prodotto {

    // questi sono gli attributi che compongono una classe

    public $id;
    public $type;
    public $cost;
    public $price;
    public $name;

  }

  // questi sono gli oggetti che sono composti da classi che a loro volta hanno attributi
  // oggetti diversi possono avere una classe in comune

  $oggetto1 = new Prodotto(1, "Computer", 50, 99, "Macbook");
  echo $oggetto1 -> id;

  $oggetto2 = new Prodotto(2, "Casa", 3, 15, "Padella");
  echo $oggetto2 -> id;
















 ?>
