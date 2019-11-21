<?php
//tablice indeksowane numerycznie

$colors = array('Red', 'Green', 'Blue');
$colors[3]='Magenta';

for ($i=0; $i < count($colors); $i++) {
  $elem=$i+1;
  echo "Element $elem: $colors[$i] <br>";
}

function showArray($tab){
  for ($i=0; $i <count($tab) ; $i++) {
    $elem = $i+1;
    echo "Element $elem:$tab[$i]<br>";
  }
}
showArray($colors);
//foreach

foreach ($colors as $value) {
  $elem = $i+1;
  echo "Element $value<br>";
}

foreach ($colors as $key => $value) {
  $elem = $key+1;
  echo "Element $elem: $value<br>";
}

//tablice asocjacyjne

$data = array(
'imie'=>'Kinga',
'nazwisko'=>'Nowak',
'wiek'=>20
);
function showArrayAssoc($tab){
foreach ($tab as $key => $value) {
  echo "$key: $value<br>";
}
}
showArrayAssoc($data);
echo $data['nazwisko'];
echo "<br>$data[nazwisko]";
echo "<br><br>";
//tablice wielowymiarowe

$student = array(
  array('Katarzyna','Nowak'),
  array('Katarzyna'),
  array('Katarzyna','Nowak',30)
);
for ($i=0; $i < count($student); $i++) {
  for ($j=0; $j < count($student[$i]); $j++) {
    echo $student[$i][$j];
  }
  echo "<br>";
}

//sortowanie tablic

$tab = array(10,2,1000,5,75,-4,10);

function Show($tab){
  foreach ($tab as $key=>$value) {
    echo "$key:$value ";
  }
}
//niemalejąco
Show($tab);
echo "<br>";
sort($tab);
Show($tab);
echo "<br>";

//nierosnąco
rsort($tab);
show($tab);
echo "<br>";
//sortowanie tablicy asocjacyjnej

$tabAssoc = array(
  "surname" => "Nowak",
  "name" => "Anna",
  "wiek" => 20,
);
Show($tabAssoc);
asort($tabAssoc); //tylko za pomocą asort, wg ascii
echo "<br>";
Show($tabAssoc);
echo "<br>";

arsort($tabAssoc); //sortowanie wg wartsoci ascii
Show($tabAssoc);
echo "<br>";

ksort($tabAssoc); //sortowanie wg nazwy klucza niemalejąco
Show($tabAssoc);
echo "<br>";

krsort($tabAssoc); //sortowanie wg nazwy klucza nierosnąco
Show($tabAssoc);
echo "<br>";

asort($tabAssoc);
//wyświetlanie danych
var_dump($tabAssoc);
echo "<br><pre>";
print_r($tabAssoc);

echo "</pre>";
 ?>
