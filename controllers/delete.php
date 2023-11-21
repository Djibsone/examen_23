<?php
require_once('../models/connexion.php');

// if(isset($_GET['id'])){

//     if (empty($_GET['id'])) {

//         $msg= "Selectionnez avant de supprimer.";
//         $url="../";		
//         header("location:../msg/message.php?msg=$msg&color=r&url=$url");

//     } else {

//         $id = htmlspecialchars($_GET['id']);
//         $stmt = delete($id);

//         if ($stmt) {

//             $msg= "Supprimé avec succès.";
//             $url="../";		
//             header("location:../msg/message.php?msg=$msg&color=v&url=$url");

//         } else {

//             $msg= "Erreur de suppression.";
//             $url="../";		
//             header("location:../msg/message.php?msg=$msg&color=r&url=$url");

//         }    
//     }
// }



//delete donneur java
if(isset($_POST['delete'])){

    if (empty($_POST['id'])) {

        $msg= "Selectionnez avant de supprimer.";
        $url="../";		
        header("location:../msg/message.php?msg=$msg&color=r&url=$url");

    } else {

        $id = htmlspecialchars($_POST['id']);
        $stmt = delete($id);

        if ($stmt) {

            $msg= "Supprimé avec succès.";
            $url="../";		
            header("location:../msg/message.php?msg=$msg&color=v&url=$url");

        } else {

            $msg= "Erreur de suppression.";
            $url="../";		
            header("location:../msg/message.php?msg=$msg&color=r&url=$url");

        }    
    }
}