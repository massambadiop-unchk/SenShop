<?php
if(!isset($_SESSION['panier'])){
    $_SESSION['panier'] = [];
}

if(isset($_GET['ajouter'])){
    $id = intval($_GET['ajouter']);
    $produit = getProduitsById($id);
    if($produit){
        if(isset($_SESSION['panier'][$id])){
            $_SESSION['panier'][$id]['quantite']++;
        } else {
            $_SESSION['panier'][$id] = [
                'id'       => $produit->id,
                'nom'      => $produit->nom,
                'prix'     => $produit->prix,
                'image'    => $produit->image,
                'quantite' => 1
            ];
        }
    }
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

if(isset($_GET['plus'])){
    $id = intval($_GET['plus']);
    if(isset($_SESSION['panier'][$id])) $_SESSION['panier'][$id]['quantite']++;
    header("Location: ?page=panier"); exit;
}

if(isset($_GET['moins'])){
    $id = intval($_GET['moins']);
    if(isset($_SESSION['panier'][$id])){
        if($_SESSION['panier'][$id]['quantite'] > 1) $_SESSION['panier'][$id]['quantite']--;
        else unset($_SESSION['panier'][$id]);
    }
    header("Location: ?page=panier"); exit;
}

if(isset($_GET['supprimer'])){
    unset($_SESSION['panier'][intval($_GET['supprimer'])]);
    header("Location: ?page=panier"); exit;
}

if(isset($_GET['vider'])){
    $_SESSION['panier'] = [];
    header("Location: ?page=panier"); exit;
}

require_once("views/panierView.php");
// Controller Panier - Rama Yade - L3 IDA UNCHK Groupe 67 2025
