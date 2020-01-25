<?php 

function retorna_raizes ($a, $b, $c) {
  $delta = ($b * $b) - (4.0 * $a * $c);

  $x1 = ((-1.0 * $b) + sqrt($delta)) / (2.0 * $a);
  $x2 = ((-1.0 * $b) - sqrt($delta)) / (2.0 * $a);

  return [
    'x\'' => $x1,
    'x"' => $x2
  ];
}

$a = 1.0;
$b = 1.0;
$c = -6.0;

print_r(retorna_raizes($a, $b, $c));

?>
