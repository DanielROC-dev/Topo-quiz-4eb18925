<?php
echo "> Dis die ene test neef xd :3" . PHP_EOL;
$goed = array(
);
$plaatsen = array(
  "Japan" => "Tokyo",
  "Mexico" => "Mexico City",
  "USA" => "Washington D.C.",
  "India" => "New Delhi",
  "Zuid-Korea" => "Seoul",
  "China" => "Peking",
  "Nigeria" => "Abuja",
  "Argentina" => "Buenos Aires",
  "Egypt" => "Cairo",
  "UK" => "London"
);
foreach($plaatsen as $quiz => $answer) {
  echo "> wat is de hoofdstad van: " . $quiz . "?" . PHP_EOL;
  $input = readline("> ");
  if ($input === $answer){
    echo "> correct!" . PHP_EOL;
    $goed[] = $answer;
  }
  else 
  echo "> helaas! '" . $input . "' is niet de hoofdstad van " . $answer . "." .PHP_EOL;
}
echo "> je hebt " . count($goed) . " goed van de 10" . PHP_EOL;
$fout = 10 - count($goed);
echo "> je hebt " . $fout . " fout van de 10" . PHP_EOL;
exit("> boutta head out");
