<?php 
$films = [
    'The Lady of Death' => ['Carlos Cores','Judith Sulivan','Austin Sire'],
    'Pirates of Treasure'=> ['Tom Nagel','Jeff Denton','James Ferris'],
    'Trouble for Two' => ['Frank Morgan','Robert Greig','Walter King']
];
foreach($films as $title => $actors) {
    echo "Dans le film $title, les principeaux acteurs sont : \n";
foreach($actors as $actors){
    echo "$actors , "."";
    }
}
?> 