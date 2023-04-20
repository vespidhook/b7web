<?php 
$today = new DateTime();
$end = new DateTime('2023-12-31');
// $date->add(DateInterval::createFromDateString('2 years 1 day 5 hours 10 minutes 20 seconds'));
// $date->sub(DateInterval::createFromDateString('2 years 1 day 5 hours 10 minutes 20 seconds'));

// $date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

$diff = $today->diff($end);

echo $diff->format('%Y anos, %m meses, %d dias, %h horas, %i minutos e %s segundos');

// echo $date->format('d/m/Y H:i:s');