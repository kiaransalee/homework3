<?php

// задаем переменные и массивы
$continents = ["Africa" => ["Tragelaphus strepsiceros", "Struthio camelus"], "Antarctica" => ["Belgica antarctica", "Euphausia superba"], "Asia" => ["Viverra zibetha", "Lipotes vexillifer"], "Australia" => ["Dromaius novaehollandiae", "Alectura lathami"], "Europe" => ["Alopex lagopus", "Canis aureus"], "North America" => ["Rangifer tarandus", "Lynx canadensis"], "South America" => ["Dasyprocta", "Inia geoffrensis"]];
$double_animals = [];
$double_animals_continents = [];
$first_parts_continents = [];
$first_parts = [];
$second_parts = [];
$fantasy_animals = [];
$results = [];

//отделяем животных с названием из двух слов
foreach ($continents as $key1 => $animals) {
    foreach ($animals as $animal) {
        if (strpos($animal, ' ') !== false) {
            $double_animals_continents[$key1][] = $animal;
        }
    }
}

//разделяем названия из двух слов на разные массивы
foreach ($double_animals_continents as $key2 => $double_animals) {
    foreach ($double_animals as $double_animal) {
        list($first_parts_continents[$key2][], $second_parts[]) = explode(' ', $double_animal);
    }
}

// перемешиваем первые части слов, чтобы они стояли в разном порядке
foreach ($first_parts_continents as $key5 => $first_part_continent) {
    shuffle($first_parts_continents[$key5]);
}

//здесь я назначила рандомный ключ элементам второй части названия, чтобы вторые части подставлялись рандомно и соединила первые и вторые части в 1 словосочетание
foreach ($first_parts_continents as $key => $first_part_continent) {
    foreach ($first_part_continent as $key4 => $first_part) {
        $key6 = mt_rand(0, 12);
        $second_part = $second_parts[$key6];
        $fantasy_animals[$key][] = $first_part . ' ' . $second_part;
    }
}

//соединияем животных каждого континента в 1 строку и выводим
foreach ($fantasy_animals as $key => $first_part_continent) {
    echo "<h2>" . $key . "</h2>";
    echo implode(', ', $first_part_continent);
}

?>