<?php

$continentsAnaimals = [
    "Africa" => ["Tragelaphus strepsiceros", "Struthio camelus"],
    "Antarctica" => ["Belgica antarctica", "Euphausia superba"],
    "Asia" => ["Viverra zibetha", "Lipotes vexillifer"],
    "Australia" => ["Dromaius novaehollandiae", "Alectura lathami"],
    "Europe" => ["Alopex lagopus", "Canis aureus"],
    "North America" => ["Rangifer tarandus", "Lynx canadensis"],
    "South America" => ["Dasyprocta", "Inia geoffrensis"],
];

$continentsDoubleAnimals = [];

foreach ($continentsAnaimals as $continent => $continentAnimals) {
    $parts1 = [];
    $parts2 = [];
    foreach ($continentAnimals as $animal) {
        $animalParts = explode(' ', $animal);
        if (count($animalParts) === 2) {
            $parts1[] = $animalParts[0];
            $parts2[] = $animalParts[1];
        }
        shuffle($parts1);
        shuffle($parts2);
    }
    $newAnimals = [];
    foreach ($parts1 as $key => $first) {
        $newAnimals[] = $first . ' ' . $parts2[$key];
    }
    $continentsDoubleAnimals[$continent] = $newAnimals;
}
foreach ($continentsDoubleAnimals as $continent => $continentDoubleAnimals) {
    echo "<h2>" . $continent . "</h2>" . PHP_EOL;
    echo implode(', ', $continentDoubleAnimals) . PHP_EOL;
}