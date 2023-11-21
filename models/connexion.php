<?php

//Démarrer session
session_start();

//Connexion à la base de données
function dbConnect(){
    try{
        $db = new PDO('mysql:host=localhost;dbname=marchesBenin;charset=utf8', 'djibril', 'tamou');
        return $db;
    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
}

//Récupérer tout
function getAll(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM marche ORDER BY idMarche');
    return $req;
}

//Recuperer toutes les catégories
function getAllCategorie(){
    $db = dbConnect();

    $req = $db->query('SELECT * FROM categorie ORDER BY idCategorie DESC');
    // $req = $db->query('SELECT * FROM departement ORDER BY nom_c ASC');
    return $req;
}

//Récupérer en fction de l'id
function getInfoById($id){
    $db = dbConnect();

    $req = $db->prepare('SELECT * FROM marche WHERE idMarche = ?');
    $req->execute(array($id));
    return $req;
}

//Ajouter à db
function add($nom, $description, $capacite, $adresse, $telephone, $upload){
    $db = dbConnect();

    $req = $db->prepare('INSERT INTO marche VALUES(Null,?,?,?,?,?,?,Null)');
    if($req->execute(array($nom, $description, $capacite, $adresse, $telephone, $upload)))
        return true;
    else
        return false;
}

//rechercher dans la db
// function search($code) {
//     $db = dbConnect();

//     $req = $db->prepare('SELECT codprojet,nomprojet,datelance,duree,l.codlocal,nomlocal FROM projet p LEFT JOIN localite l ON p.codlocal=l.codlocal WHERE codprojet LIKE :code');
//     $req->execute(array(':code' => '%' . $code . '%'));
//     return $req;
// }

//Compter le nombre
function countNbre() {
    $db = dbConnect();

    $stmt = $db->query('SELECT COUNT(*) AS nbr_total FROM oeuvre');
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result['nbr_total'];
}

//Modifier l'infos
function update($nom, $description, $capacite, $adresse, $telephone, $upload, $id){
    $db = dbConnect();

    $req = $db->prepare('UPDATE marche SET nomMarche = ?, description = ?, capacite = ?, adresse = ?, telephone = ?, image = ? WHERE idMarche = ?');

    if($req->execute(array($nom, $description, $capacite, $adresse, $telephone, $upload, $id)))
        return true;
    else
        return false;
}

//Supprimer l'nfos
function delete($id){
    $db = dbConnect();

    $req = $db->prepare('DELETE FROM marche WHERE idMarche = ?');

    if($req->execute(array($id)))
        return true;
    else
        return false;
}

