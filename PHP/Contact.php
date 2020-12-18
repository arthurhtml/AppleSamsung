<?php
include ('header.php');

    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<title>Contact</title>
<link rel="stylesheet" type="text/css" href="../CSS/Common.css">
<link rel="stylesheet" type="text/css" href="../CSS/bootstrap.min.css">
<link rel="shortcut icon" href="../IMG/Apple.png">
<meta charset="UTF-8">
<style>
    .starter-template {
        padding-top: 40px;
    }
</style>
<body >

    <div class="container h-75 pt-5 ">

        <div class="starter-template ">
            <div class="col-md-6 ml-auto mr-auto">

                <?php if(array_key_exists('errors', $_SESSION)){ ?>

                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['errors']); } ?>
                    </div>

                <?php if(array_key_exists('success', $_SESSION)){ ?>

                <div class="alert alert-success col-md-6 ml-auto mr-auto">
                    Votre email a bien été envoyé
                </div>

                <?php } ?>
            </div>
            <div >
                <form action="post_contact.php" method="POST" >

                    <div class="row ">

                        <div class="col-md-3 ml-auto mr-0">

                            <div class="form-group">
                                <label for="inputname">Nom : </label>
                                <input type="text" name="name" class="form-control" id="inputname" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : '';?>">
                            </div>

                        </div>
                        <div class="col-md-3 ml-0 mr-auto">

                            <div class="form-group">
                                <label for="inputemail">Email : </label>
                                <input type="text" name="email" class="form-control" id="inputemail" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : '';?>">
                            </div>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">

                            <div class="form-group">
                                <label for="inputmessage">Message : </label>
                                <textarea id="inputmessage" name="message" class="form-control"><?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : '';?></textarea>
                            </div>

                            <div class="text-right">
                                <button type="reset" class="btn btn-info">Effacer</button>
                                <button type="submit" class="btn btn-primary" >Envoyer</button>
                            </div>

                        </div>

                    </div>


                </form>
            </div>
        </div>

    </div>

</body>
</html>
<?php
    unset($_SESSION['inputs']);
    unset($_SESSION['errors']);
    unset($_SESSION['success']);
    include ('footer.php');
?>