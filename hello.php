<!DOCTYPE html>
<html land="fr">
    <body>
        <h1>Bienvenue dans Street Feet</h1>
    </body>
</html>
<?php
// Partie 1 - Les variables

// Ici je créer une variable nommée $nom_boutique qui est egal a la string "Street Feet"
$nom_boutique = "Street Feet"; // string
$prix = 149.99; // float
$stock = 12; // int -> integer -> nombre entier
$enStock = true; // bool
$promo = null; // null (ca sert juste a rendre une variable existante mais sans valeur)
$nom_produit = "Samba";

// Partie 2 - La concaténation
echo "La ". $nom_produit . " coûte " . $prix . "€\n"; // Une maniere de concaténer
echo "<br>";
echo "La $nom_produit coûte $prix €"; // Une autre manière de concaténer
echo "<br>";
echo 'La $nom_produit coûte $prix €'; // Ne fonctionne pas de cette maniere avec les simples quotes
echo "<br>";

echo 'La '. $nom_produit . ' coûte ' . $prix . '€'; // Une maniere de concaténer avec les simples quotes

// Partie 3 - Les calculs
$quantite = 3;
$le_prix = 100;

echo "<br>";
echo "<br>";
echo "<br>";
echo $le_prix + $quantite; // addition
echo "<br>";
echo $le_prix - $quantite; // soustraction
echo "<br>";
echo $le_prix * $quantite; // multiplication
echo "<br>";
echo $le_prix / $quantite; // division
echo "<br>";
echo $le_prix % $quantite; // modulo (reste de la division)
echo "<br>";
echo "<br>";
echo "<br>";

// Partie 4 - Les conditions
$seuil = 15;
// $stock = 12
if ($stock == 0) {
    echo "Rupture de stock !";
}
elseif ($stock <= $seuil) {
    echo "Stock faible ...";
} else {
    echo "En stock";
}
echo "<br>";
echo "<br>";
echo "<br>";

// Partie 5 - Les tableaux & les boucles
$marques = ["Nike", "Adidas", "Puma", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas", "Adidas"];
echo($marques); // Ici echo ne fonctionnera pas, ca va afficher 'Array', car echo est une fonction qui permet d'affiche des strings
echo "<br>";

print_r($marques); // Ici print_r permet d'afficher un tableau en entier
echo "<br>";

echo($marques[0]); // Ici on va afficher "Nike" car c'est la case 0 du tableau $marques
echo "<br>";
echo $marques[2];
echo "<br>";

$nombre_index = count($marques); // Ici je stock le nombre d'index qu'il y a dans le tableau $marques
echo $nombre_index;


echo "<br>";

$i = 0; // Ici $i est mon compteur, c'est grace a lui que je vais parcourir mon tableau $marques
while ($i <= count($marques) - 1) {
    echo $marques[$i];
    echo "<br>";

    $i = $i + 1;
}
echo $i;
    echo "<br>";
    echo "<br>";

for ($i = 0; $i < count($marques); $i++) {
    echo $marques[$i];
    echo "<br>";
}