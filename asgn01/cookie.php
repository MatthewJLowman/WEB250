<?php

class RoundCookie {
  var $weight;
  var $color;
  var $icing;

  function decorate() {
    return "Drizzle " . $this->icing;
  }

  function consume() {

  }
}
// create a new RoundCookie object (instantiation)
$cookie1 = new RoundCookie;
$cookie1->weight = " 1lb.";
$cookie1->color = "Brown";
$cookie1->icing = "Cream Cheese icing";

$cookie2 = new RoundCookie;
$cookie2->weight = " 2 oz.";
$cookie2->color = "Yellow";
$cookie2->icing = "Snozzberry icing";

echo "<p>My first cookie weighs" . $cookie1->weight . " is is " . $cookie1->color . " and is covered with " . $cookie1->icing "</p>";
echo "<p>My second cookie weighs" . $cookie2->weight . " is is " . $cookie2->color . " and is covered with " . $cookie2->icing "</p>";
>