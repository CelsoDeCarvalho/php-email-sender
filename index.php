<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <title>PHP EMAIL SENDER</title>
</head>
<body>
<div class="container h-100">
    <div class="row justify-content-center">
        <div class="col-xl-4 col-lg-4 col-mg-6 col-sm-12">
            <h3 class="mt-5 mb-5 text-muted text-center">
                PHP EMAIL SENDER
            </h3>
            <?php
            if (isset($_POST['btn-send'])) {
                $receptor = $_POST['receptor'];
                $assunto = $_POST['assunto'];
                $conteudo = $_POST['conteudo'];
                $emissor = "celsomomade361@gmail.com";

                if (empty($receptor) || empty($assunto) || empty($conteudo)) {
                    ?>
                    <div class="alert alert-danger text-center">
                        <h5>Preencha todos os campos</h5>
                    </div>
                    <?php
                } else {
                    if (mail($receptor, $assunto, $conteudo, $emissor)) {
                        ?>
                        <div class="alert alert-success text-center">
                            <h5>Voce mandou um email para<?php $receptor ?></h5>
                        </div>
                    <?php
                    }
                }
            }
            ?>
            <form method="post" autocomplete="off">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email receptor</label>
                    <input type="email" name="receptor" class="form-control" id="exampleInputEmail1"
                           aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Assunto</label>
                    <input type="text" name="assunto" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-floating mb-3">
                    <textarea name="conteudo" class="form-control" placeholder="Leave a comment here"
                              id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Conteudo</label>
                </div>
                <button name="btn-send" type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>

</div>
</body>
</html>