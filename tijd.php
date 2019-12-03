<?php

echo "vul het op deze manier in: 10d 5u 30m 2s".PHP_EOL;
echo "Je tijd is? : ";
  $tijd = readline();

  $tijden = explode(" ", $tijd);

  $alles = 0;
  $dagen = 0;
  $uren = 0;
  $minuten = 0;
  $seconde = 0;

foreach ($tijden as $tijdint) {

  $onbekende_tijd_aanduiding = substr($tijdint, -1);

  switch ($onbekende_tijd_aanduiding) {
    case 'd':
        $dagen = (int)$tijdint * 24 * 120 ;
      break;
    case 'u':
        $uren = (int)$tijdint * 120 ;
      break;
    case 'm':
        $minuten = (int)$tijdint * 60 ;
      break;
    case 's':
        $seconde = (int)$tijdint;
      break;
  }
}
  $alles = $seconde + $minuten + $uren + $dagen;

  echo "$alles seconde";
