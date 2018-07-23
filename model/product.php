<?php 
//récuperer liste produits
function getProducts($bdd)
{
//Requete la base de données
$request = $bdd->query("SELECT * FROM products");
//Extraction des informations
$products = $request->fetchall(PDO::FETCH_ASSOC);
return $products;
}

//séléctionner un produi
function getProduct()
{
    
}

//supprimer un produit
function deleteProduct()
{
    
}

//insérer un produit
function insertProduct()
{
    
}
?>