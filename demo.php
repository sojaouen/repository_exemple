Salut les gens

<?php
$prenom = 'Marc';
$nom = 'Doe';
$note1 = 10;
$note2 = 20;
$moyenne = (($note1 + $note2)/2);

// Bonjour Marc vous avez eu 15 de moyenne

echo 'Bonjour '.$prenom.' '.$nom.' vous avez eu '.(($note1 + $note2) /2).' '.'de moyenne';
echo "\nBonjour $prenom $nom vous avez eu $moyenne de moyenne";