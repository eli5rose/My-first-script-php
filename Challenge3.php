<?php 
$books = [
    "Voyage avec un ane" => '1878',
    "Prince Othan" => '1885',
    "Catriona" => '1893'
];
asort($books);

foreach($books as $key => $value) {
    echo " > $value - $key";
}
?> 
