<?php
try {
     $db = new PDO("mysql:dbname=senshop; host=localhost", "root", "");
} catch (PDOException $th) {
    die("Erreur:".$th->getMessage());
}

function ajoutCompte($prenom, $nom, $tel, $adresse, $email, $mdp){
    global $db;
    try {
         $q = $db->prepare("INSERT INTO user(prenom, nom, tel, adresse, email, mdp,role) VALUES (:prenom, :nom, :tel, :adresse, :email, :mdp,:role)");
        return $q->execute([
    ":prenom"  => $prenom,
    ":nom"     => $nom,
    ":tel"     => $tel,
    ":adresse" => $adresse,
    ":email"   => $email,
    ":mdp"     => $mdp,
    ":role"     => "client"
]);
    } catch (PDOException $th) {
    die("Erreur:".$th->getMessage());
}
}

function connecter($email, $mdp){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM user WHERE email =:email AND mdp =:mdp");
        $q->execute([
         ":email"   => $email,
         ":mdp"     => $mdp
        ]);
        return $q->fetch(PDO::FETCH_OBJ);
   } catch (PDOException $th) {
    die("Erreur:".$th->getMessage());
}
}

function ajoutCategorie($nom, $descript){
  global $db;
  try {
     $q = $db->prepare("INSERT INTO categorie(nom, descript) VALUES(:nom, :descript)");
     return $q->execute([
      ":nom" => $nom,
      ":descript" => $descript
     ]);
  } catch (PDOException $th) {
    die("Erreur:".$th->getMessage());
  }
}

function getAllcategories(){
 global $db;
 try {
    $q = $db->prepare("SELECT * FROM categorie");
    $q->execute();
    return $q->fetchAll(PDO::FETCH_OBJ);
 } catch (PDOException $th) {
    die("Erreur:".$th->getMessage());
 }
}

function ajoutproduits($nom, $categorie, $prix, $stock, $descript, $image){
    global $db;
    try {
         $q = $db->prepare("INSERT INTO produits(nom, categorie, prix, stock, descript, image) VALUES (:nom, :categorie, :prix, :stock, :descript, :image)");
        return $q->execute([
    ":nom" => $nom,
    ":categorie" => $categorie,
    ":prix" => $prix,
    ":stock"  => $stock,
    ":descript" => $descript,
    ":image" => $image
]);
    } catch (PDOException $th) {
    die("Erreur:".$th->getMessage());
}
}



function getAllproduits(){
    global $db;

    try {

        $q = $db->prepare("
            SELECT p.*, c.nom AS nom_categorie
            FROM produits p
            LEFT JOIN categorie c
                ON p.categorie = c.id
        ");

        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);

    } catch(PDOException $th){

        die("Erreur : ".$th->getMessage());

    }
}



function deleteProduit($id){
    global $db;
    try {
        $req = $db->prepare("DELETE FROM produits WHERE id = :id");
        return $req->execute(["id" =>$id ]);
    }catch(PDOException $th){
    
    die("Erreur : ".$th->getMessage());

    }
}

function deleteCategorie($id){
    global $db;
    try {
        $req = $db->prepare("DELETE FROM categorie WHERE id = :id");
        return $req->execute(["id" =>$id ]);
    }catch(PDOException $th){
    
    die("Erreur : ".$th->getMessage());

    }
}

function getProduitsById($id){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM produits WHERE id = :id ");
        $req->execute([
          "id"=>$id
        ]);

        return $req->fetch(PDO::FETCH_OBJ);
        
    } catch(PDOException $th){
    die("Erreur : ".$th->getMessage());
    }
}
// ─── EDIT CATÉGORIE ────────────────────────────────────────────
function getCategorieById($id){
    global $db;
    try {
        $req = $db->prepare("SELECT * FROM categorie WHERE id = :id");
        $req->execute(["id" => $id]);
        return $req->fetch(PDO::FETCH_OBJ);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}

function updateCategorie($id, $nom, $descript){
    global $db;
    try {
        $req = $db->prepare("UPDATE categorie SET nom=:nom, descript=:descript WHERE id=:id");
        return $req->execute([":nom" => $nom, ":descript" => $descript, ":id" => $id]);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}

// ─── EDIT PRODUIT ──────────────────────────────────────────────
function updateProduit($id, $nom, $categorie, $prix, $stock, $descript, $image){
    global $db;
    try {
        $req = $db->prepare("UPDATE produits SET nom=:nom, categorie=:categorie, prix=:prix, stock=:stock, descript=:descript, image=:image WHERE id=:id");
        return $req->execute([
            ":nom"       => $nom,
            ":categorie" => $categorie,
            ":prix"      => $prix,
            ":stock"     => $stock,
            ":descript"  => $descript,
            ":image"     => $image,
            ":id"        => $id
        ]);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}

// ─── COMMANDES ─────────────────────────────────────────────────
function passerCommande($produit_id, $quantite, $prenom, $nom, $telephone, $adresse, $ville, $region, $repere){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO commande(produit_id, quantite, prenom, nom, telephone, adresse, ville, region, repere) VALUES(:produit_id, :quantite, :prenom, :nom, :telephone, :adresse, :ville, :region, :repere)");
        return $q->execute([
            ":produit_id" => $produit_id,
            ":quantite"   => $quantite,
            ":prenom"     => $prenom,
            ":nom"        => $nom,
            ":telephone"  => $telephone,
            ":adresse"    => $adresse,
            ":ville"      => $ville,
            ":region"     => $region,
            ":repere"     => $repere
        ]);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}

function getAllCommandes(){
    global $db;
    try {
        $q = $db->prepare("
            SELECT c.*, p.nom AS produit_nom, p.prix AS produit_prix,
                   p.image AS produit_image, cat.nom AS categorie_nom
            FROM commande c
            JOIN produits p ON c.produit_id = p.id
            LEFT JOIN categorie cat ON p.categorie = cat.id
            ORDER BY c.date_commande DESC
        ");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}

function deleteCommande($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM commande WHERE id=:id");
        return $q->execute([":id" => $id]);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}

// ─── CONTACT / MESSAGES ────────────────────────────────────────
function envoyerMessage($nom, $email, $telephone, $sujet, $message){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO contact(nom, email, telephone, sujet, message) VALUES(:nom, :email, :telephone, :sujet, :message)");
        return $q->execute([
            ":nom"       => $nom,
            ":email"     => $email,
            ":telephone" => $telephone,
            ":sujet"     => $sujet,
            ":message"   => $message
        ]);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}

function getAllMessages(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM contact ORDER BY date_envoi DESC");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}

function deleteMessage($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM contact WHERE id=:id");
        return $q->execute([":id" => $id]);
    } catch(PDOException $th){
        die("Erreur : ".$th->getMessage());
    }
}
/ /   B a s e   d e   d o n n e e s   -   T o u t e s   l e s   f o n c t i o n s   S Q L   -   M a s s a m b a   D i o p  
 