<?php

echo "PRODOTTO";
echo "<br>";

// questa è una classe che compone l'oggetto

  class Prodotto {

    // questi sono gli attributi che compongono una classe

    public $id;
    public $type;
    public $cost;
    public $price;
    public $name;

    function __construct($id, $type, $cost, $price, $name) {
      $this -> id = $id;
      $this -> type = $type;
      $this -> cost = $cost;
      $this -> price = $price;
      $this -> name = $name;

    }

    public function PrintMe()
    {
      echo
      "id: " . $this -> id . "<br>" .
      "type: " . $this -> type . "<br>" .
      "cost: " . $this -> cost . "<br>" .
      "price: " . $this -> price . "<br>" .
      "name: " . $this -> name . "<br>";

    }
  }

  // questi sono gli oggetti che sono composti da classi che a loro volta hanno attributi
  // oggetti diversi possono avere una classe in comune

  $oggetto1 = new Prodotto(1, "Computer", 50, 99, "Macbook");
  $oggetto1 -> PrintMe();
  echo "<br>";



  $oggetto2 = new Prodotto(2, "Casa", 3, 15, "Padella");
  $oggetto2 -> PrintMe();
  echo "<br>";

 ?>
