<?php
$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

if($opponentWeapon === $weapons[0]) {
    $stevensonWeapon = "gun";
    echo "StevensonWeapon won !";
}

elseif($opponentWeapon === $weapons[1]) {
    $stevensonWeapon = "fists";
    echo "$stevensonWeapon won !!";
}

elseif($opponentWeapon === $weapons[2]) {
    $stevensonWeapon = "whip";
    echo "$stevensonWeapon won !!";
}

?>