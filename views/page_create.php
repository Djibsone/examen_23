<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>PAGE CREATE</title>
</head>
<body>

    <!-- debut formulaire  -->
    <div class="container mt-3">
        <div class="card bg-transparentt">
            <div class="card-header text-center">
                <span class="fa fa-arrow-circle-left custome-icon" onclick="retour();"></span>
                Nouvel enregistrement
            </div>
            <div class="card-body">
                <form action="../controllers/store.php" method="post" enctype="multipart/form-data">

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">NOM DU MARCHÉ <span>*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nom" placeholder="Nom du marché">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">DESCRIPTION <span>*</span></label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" placeholder="Nom du group"></textarea>
                        </div>
                    </div>

                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">CAPACITÉ DU MARCHÉ <span>*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="capacite" placeholder="Capacité du mlarché">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">ADRESSE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="adresse" placeholder="Adresse">
                        </div>
                    </div>
                    
                    <div class="form-group row mb-3">
                        <label class="col-sm-2 col-form-label">TÉLÉPHONE</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="telephone" placeholder="Téléphone">
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
                            <button type="submit" class="btn btn-primary float-right" name="add">Enregistrer <span class="fa fa-save"></span></button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- fin formulaire  -->

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>