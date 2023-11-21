<?php
require_once('../models/connexion.php');

if(isset($_POST['update'])){

        if (!empty($_POST['nom']) && !empty($_POST['description']) && !empty($_POST['capacite']) && !empty($_POST['adresse']) && !empty($_POST['telephone'])) {

                $id = htmlspecialchars($_POST['id']);
                $nom = htmlspecialchars($_POST['nom']);
                $description = htmlspecialchars($_POST['description']);
                $capacite = htmlspecialchars($_POST['capacite']);
                $adresse = htmlspecialchars($_POST['adresse']);
                $telephone = htmlspecialchars($_POST['telephone']);

                $image = $_FILES['image']['name'];
                $tmp = $_FILES['image']['tmp_name'];
                $upload ='../images/'.$image;
                move_uploaded_file($tmp, $upload);

                $stmt = update($nom, $description, $capacite, $adresse, $telephone, $upload, $id);

                if ($stmt) {

                        $msg= "Modifié avec succès.";
                        $url="../";		
                        header("location:../msg/message.php?msg=$msg&color=v&url=$url");

                } else {

                        $msg= "Erreur de modification.";
                        $url="../views/page_edit.php";		
                        header("location:../msg/message.php?msg=$msg&color=r&url=$url");

                } 
                
        } else {

                $msg= "Renseignez les champs.";
                $url="../";		
                header("location:../msg/message.php?msg=$msg&color=r&url=$url");

        }
         
}