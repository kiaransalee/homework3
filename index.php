<?php
$continentsAnimals = [
    "Africa" => ["Tragelaphus strepsiceros", "Struthio camelus"],
    "Antarctica" => ["Belgica antarctica", "Euphausia superba"],
    "Asia" => ["Viverra zibetha", "Lipotes vexillifer"],
    "Australia" => ["Dromaius novaehollandiae", "Alectura lathami"],
    "Europe" => ["Alopex lagopus", "Canis aureus"],
    "North America" => ["Rangifer tarandus", "Lynx canadensis"],
    "South America" => ["Dasyprocta", "Inia geoffrensis"],
];

$parts1Continents = [];
$parts2 = [];
$newAnimals = [];
$parts1ContinentsShuffle = [];


foreach ($continentsAnimals as $continent => $continentAnimals) {
    foreach ($continentAnimals as $key => $animal) {
        $animalParts = explode(' ', $animal);
        if (count($animalParts) === 2) {
            $parts1Continents[$continent][] = $animalParts[0];
            $parts2[] = $animalParts[1];

        }
    }
}

foreach ($parts1Continents as $key1 => $parts1) {
    shuffle($parts1);
    $parts1ContinentsShuffle[$key1] = $parts1;
}

foreach ($parts1ContinentsShuffle as $key => $parts1) {
    foreach ($parts1 as $key1 => $first) {
        shuffle($parts2);
        $newAnimals[$key][] = $first . ' ' . $parts2[$key1];
    }
}

foreach ($newAnimals as $key => $newAnimal) {
    echo "<h2>" . $key . "</h2>";
    echo implode(', ', $newAnimal) . "<br>";
}

?>