<?php
require_once('../models/connexion.php');

if(isset($_POST['add'])){

        if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['capacite']) && !empty($_POST['adresse']) && !empty($_POST['telephone'])) {

                $nom = htmlspecialchars($_POST['nom']);
                $description = htmlspecialchars($_POST['description']);
                $capacite = htmlspecialchars($_POST['capacite']);
                $adresse = htmlspecialchars($_POST['adresse']);
                $telephone = htmlspecialchars($_POST['telephone']);

                $fichier = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];
                $upload ='../images/'.$fichier;
                move_uploaded_file($tmp, $upload);

                $stmt = add($nom, $description, $capacite, $adresse, $telephone, $upload);

                if ($stmt) {

                        $msg= "Ajouté avec succès.";
                        $url="../";		
                        header("location:../msg/message.php?msg=$msg&color=v&url=$url");

                } else {

                        $msg= "Erreur d\'ajout.";
                        $url="../views/page_create.php";		
                        header("location:../msg/message.php?msg=$msg&color=r&url=$url");

                }
                
        } else {

                $msg= "Renseignez les champs.";
                $url="../views/page_create.php";	
                header("location:../msg/message.php?msg=$msg&color=r&url=$url");

        }
        
}