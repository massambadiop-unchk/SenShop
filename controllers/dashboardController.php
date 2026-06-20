<?php
$commandes_recentes = getAllCommandes();
$commandes_recentes = array_slice($commandes_recentes, 0, 5);
$produits_recents = getAllproduits();
$produits_recents = array_slice($produits_recents, 0, 5);
require_once("views/dashboardView.php");
