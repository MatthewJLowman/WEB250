<?php

class Bird {
  var $commonName;
  var $food;
  var $nestPlacement = "tree";
  var $conservationLevel;
  var $lyrics;

  function song() {
    return $this->lyrics;
  }

  function canFly() {
    return "This bird can fly";
  }

}

$bird1 = new Bird;
$bird1->commonName = 'Eastern Towhee';
$bird1->food = 'seeds, fruits, insects, spiders';
$bird1->nestPlacement = 'Ground';
$bird1->conservationLevel = 'Low';
$bird1->lyrics = 'drink-your-tea';

$bird2 = new Bird;
$bird2->commonName = 'Indigo Bunting';
$bird2->food = 'small seeds, berries, buds, and insects';
$bird2->nestPlacement = 'roadsides, and railroad rights-of-wafields and on the edges of woods';
$bird2->conservationLevel = 'Low';
$bird2->lyrics = 'whatwhat';

echo $bird1->song() . "<br />";
echo $bird1->canFly() . "<br />";

echo $bird2->song . "<br />";
echo $bird2->canFly() . "<br />";

?>