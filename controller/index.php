<?php 
//récupère donnees du model
require "../model/connexion.php";
require "../model/product.php";

$products = getProducts($bdd);
var_dump($products);

//effectue la logique de code
if(isset($_POST["addProduct"])){
    insertProduct($bdd, $_POST);
}

//affiche la vue
require "../view/indexView.php";

?>