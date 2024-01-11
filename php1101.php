<?php
 // traccia 1
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

foreach($users as $user) {
    if ($user['gender'] == 'M') {
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } elseif ($user['gender'] == 'F') {
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
}

$users2 = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

foreach($users2 as $user2) {
    switch($user2['gender']) {
        case 'M':
            echo "Buongiorno Sig. " . $user2['name'] . " " . $user2['surname'] . "\n";
            break;
        case 'F':
            echo "Buongiorno Sig.ra " . $user2['name'] . " " . $user2['surname'] . "\n";
            break;
        default:
            echo "Buongiorno " . $user2['name'] . " " . $user2['surname'] . "\n";
            break;
    }
}

 // traccia 2

 
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;

foreach ($array as $numero) {   
    if ($numero % 2 === 0) {        
        $sum += $numero;        
        $count++;
    }
}

if ($count > 0) {    
    $media = $sum / $count;
    echo "La media dei numeri pari è: " . $media. "\n";
} else {
    echo "Non ci sono numeri pari nell'array."."\n";
}

 // traccia 3 

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY" . "\n";
    } elseif ($i % 3 == 0) {
        echo "PHP" . "\n";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT" . "\n";
    } else {
        echo "$i" . "\n";
    }
}

 //traccia 4 

$temperatura = 20;

if($temperatura < 15){
    echo "Fa freddo" . "\n";
}
else if($temperatura >= 15 && $temperatura <= 25){
    echo "Fa caldo" . "\n";
}
else{
    echo "Fa molto caldo" . "\n";
}
 //traccia 5

$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];

foreach ($temperature as $citta => $temp) {
  if ($temp < 15) {
    echo "A $citta fa freddo con $temp °C." . "\n";
  } elseif ($temp >= 15 && $temp <= 25) {
    echo "A $citta fa caldo con $temp °C." . "\n";
  } else {
    echo "A $citta fa molto caldo con $temp °C." . "\n";
  }
}
 // traccia 6 

 $tombola = [];

for ($i = 0; $i < 4; $i++) {
  $arrayInterno = [];
  for ($j = 0; $j < 5; $j++) {
    $arrayInterno[] = rand(1, 100);
  }
  $tombola[] = $arrayInterno;
}

var_dump($tombola);
print_r($tombola);














