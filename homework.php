<?php
$continents = ["Africa" => ["Tragelaphus strepsiceros","Struthio camelus"],"Antarctica"=>["Belgica antarctica","Euphausia superba"],"Asia"=>["Viverra zibetha","Lipotes vexillifer"],"Australia"=>["Dromaius novaehollandiae","Alectura lathami"],"Europe"=>["Alopex lagopus","Canis aureus"],"North America"=>["Rangifer tarandus","Lynx canadensis"],"South America"=>["Dasyprocta","Inia geoffrensis"]];
$double_animals=[];
$double_animals_continents=[];
$first_parts_continents=[];
$first_parts=[];
$second_parts=[];
$fantasy_animals=[];
$results=[];
// тут мы задали переменные и массивы


foreach ($continents as $key1=>$animals) {
    foreach ($animals as $animal) {
        if (strpos($animal, ' ') !== false) {
            $double_animals_continents[$key1][] = $animal;

        }
    }
}

//  тут мы отделили животных с названием из двух слов

//print_r($double_animals);

foreach ($double_animals_continents as $key2=>$double_animals) {


    foreach ($double_animals as $double_animal) {

        list($first_parts_continents[$key2][], $second_parts[]) = explode(' ', $double_animal);
    }
}
// здесь мы разделяем названия из двух слов на разные массивы


foreach ($first_parts_continents as $key5=>$first_part_continent) {
    shuffle($first_parts_continents[$key5]);
}



// здесь мы перемешиваем первые части слов, чтобы они стояли в разном порядке


   foreach ($first_parts_continents as $key=>$first_part_continent) {

       foreach ($first_part_continent as $key4 => $first_part) {



               $key6 = mt_rand(0, 12);
               $second_part = $second_parts[$key6];



               $fantasy_animals[$key][] = $first_part . ' ' . $second_part;


           }
       }

//здесь я назначила рандомный ключ элементам второй части названия, чтобы вторые части подставлялись рандомно и соединила первые и вторые части в 1 словосочетание

foreach ($fantasy_animals as $key=>$first_part_continent) {
 

    foreach ($first_part_continent as $key=>$result) {

        $results[$key][] =  $result . ",";

    }
}

//здесь мы выводим континенты заголовками и добавляем запятую к названиям животных.

foreach ($fantasy_animals as $key=>$first_part_continent) {
    echo "<h2>" . $key . "</h2>";

    echo implode(', ', $first_part_continent);

}

   //соединияем животных каждого континента в 1 строку и выводим

?>