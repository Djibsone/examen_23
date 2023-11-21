<?php
	require_once('../models/connexion.php');
   
    if (isset($_GET['id'])) {

        if (!empty($_GET['id'])) {

            $id = htmlspecialchars($_GET['id']);
            $stmt = getInfoById($id);
            $result = $stmt->fetch();

        } else {

            $msg= "Selectionnez avant de modifier.";
            $url="../";		
            header("location:../msg/message.php?msg=$msg&color=r&url=$url");
        
        }
        
    }

    //recuperation avec ajax
    if (isset($_POST['id'])){
        $id = htmlspecialchars($_POST['id']);
    
        $data = getInfoById($id);
        echo json_encode($data->fetch(PDO::FETCH_ASSOC));
    }

    
?>