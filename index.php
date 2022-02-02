<?php

/**
 * 1. Créez une classe Habitation, elle contiendra les propriétés:
 *    - pays ( string )
 *    - ville ( string )
 *    - code postal ( entier ou string )
 *    - chambres ( entier )
 *    - pièces ( entier )
 *
 * Définissez tous les setters et les getters.
 *
 *
 *
 * 2. Créez une classe Maison qui étend de Habitation, elle contiendra les propriétés:
 *    - jardin ( booleen )
 *    - etages ( entier )
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 3. Créez une classe Appartement qui étend de habitation, elle contiendra les propriétés:
 *    - garage ( booleen )
 *
 * Définissez tous les getters et les setters.
 *
 *
 *
 * 4. Créez deux instances de Maison et invoquez toutes les méthodes définies, sauf les setters ( dans index.php ).
 *
 *
 *
 * 5. Créez une instance de Appartement et invoquez toutes les méthodes définies, y compris les setters ( dans index.php ).
 */

require 'Classes/Dwelling.php';
require 'Classes/House.php';
require 'Classes/Apartment.php';

// part 4
// house 1
$house1 = new House('pay1', 'ville1', 11001, 2, 5, true, 1, true);
echo $house1->getCountry() . ', ' . $house1->getCity() . ', ' . $house1->getPostalCode() . '<br>';
echo 'chambre : ' . $house1->getBedroom() . '<br> pièces : ' . $house1->getRoom() . '<br> étage : ' . $house1->getFloor() . '<br>';
echo 'jardin : ' . $house1->isGarden() . '<br> garage : ' . $house1->isGarage();

echo '<br><br>';
// house 2
$house2 = new House('pay2', 'ville2', 10101, 5, 10, true, 3, true);
echo $house2->getCountry() . ', ' . $house2->getCity() . ', ' . $house2->getPostalCode() . '<br>';
echo 'chambre : ' . $house2->getBedroom() . '<br> pièces : ' . $house2->getRoom() . '<br> étage : ' . $house2->getFloor() . '<br>';
echo 'jardin : ' . $house2->isGarden() . '<br> garage : ' . $house2->isGarage();

echo '<br><br>';
// part 5
$apartment = new Apartment('pay3', 'ville3', 10001, 1, 4, false);

$apartment->setCountry('pay4');
$apartment->setCity('ville4');
$apartment->setPostalCode(10011);
$apartment->setBedroom(1);
$apartment->setRoom(4);
$apartment->setGarage(true);

echo $apartment->getCountry() . ', ' . $apartment->getCity() . ', ' . $apartment->getPostalCode() . '<br>';
echo 'chambre : ' . $apartment->getBedroom() . '<br> pièces : ' . $apartment->getRoom() . '<br>';
echo 'garage : ' . $apartment->isGarage();