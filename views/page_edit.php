<?php

	require('../controllers/show.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>PAGE EDIT</title>
</head>
<body>

    <div class="container mt-3">
        <div class="card bg-transparentt">
            <div class="card-header text-center">
                <span class="fa fa-arrow-circle-left custome-icon" onclick="retour();"></span>
                Nouvelle modification
            </div>
            <div class="card-body">
                <form action="../controllers/update.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $result['idMarche'] ?>">
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">NOM DU MARCHÉ <span>*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nom" value="<?= $result['nomMarche'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">DESCRIPTION <span>*</span></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description"><?= $result['description'] ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">CAPACITÉ DU MARCHÉ <span>*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="capacite" value="<?= $result['capacite'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">ADRESSE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="adresse" value="<?= $result['adresse'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">TÉLÉPHONE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telephone" value="<?= $result['telephone'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">IMAGE</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <button type="reset" class="btn btn-warning">Annuler <span class="fa fa-close"></span></button>
                            <button type="submit" class="btn btn-success float-right" name="update">Modifier <span class="fa fa-edit"></span></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>