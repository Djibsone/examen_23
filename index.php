<?php
	require_once('models/connexion.php');
    $results = getAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>INDEX</title>
</head>
<body>

    <!-- debut table  -->
    <div class="mt-2">
        <h1 class="text-center"> La liste des marchés</h1>

        <div class="container">
            <div class="row">

                <?php foreach ($results as $result) : ?>

                    <div class="col-md-4 mb-4">
                        <div class="card carte">
                            <img src="<?= $result['image'] ?>" class="card-img-top custom-card-image" alt="Image">
                            <div class="card-body">
                                <h5 class="card-title"><b><?= $result['nomMarche'] ?></b></h5>
                                <!-- <p class="card-text"><?= $result['capacite'] ?> places</p> -->
                                <div class="d-flex justify-content-between">
                                    <p class="card-text"><?= ($result['capacite'] > 1) ? $result['capacite'].' places' : $result['capacite'].' place'; ?></p>
                                    <div>
                                        <a href="views/page_edit.php?id=<?= $result['idMarche'] ?>"
                                            class="btn btn-success btn-edit-delete"> 
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        &nbsp
                                        <a href="" class="btn btn-danger btn-edit-delete delete"
                                            data-id="<?= $result['idMarche'] ?>">
                                            <span class="fa fa-trash"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>

            </div>
            <a href="views/page_create.php" class="btn btn-primary btn-edit-delete btn-block">
                <span class="fa fa-plus"></span>
            </a>
        </div>

	</div>
    <!-- fin table -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>
</html>

<!-- modal inclusion -->
<?php include 'views/page_modal.php' ?>