<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <link href="css/bootstrap-reboot.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-grid.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/comprar.css">
    <title>Comprar</title>
</head>

<body>
<div class="container-fliud wrapper ">
        <div class="row ">
            <div class="col-lg-10 col-xl-9 mx-auto ">
                <div class="card card-signin flex-row my-5">
                    <div class="card-img-left d-none d-md-flex" style=" width: 50%;
  background: scroll center
    url('https://images6.alphacoders.com/324/324220.jpg');
  background-size: cover;
">
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center">Comprar</h5>
                        <form class="form-signin" action="../controller/resultados.php" method="POST">

                            <div class="form-label-group " method="POST">
                                <input type="number" name="cpf" id="cpf" class="form-control shadow-sm" placeholder="cpf" required>
                                <label for="cpf">CPF</label>
                            </div>

                            <div class="form-label-group" method="POST">
                                <input type="text" name="nome" id="inputUserame" class="form-control shadow-sm" placeholder="Username" required>
                                <label for="inputUserame">Nome do usuario</label>
                            </div>

                            <div class="form-label-group" method="POST">
                                <input type="text" name="localizacao" id="inputUserame" class="form-control shadow-sm" placeholder="Localização" required>
                                <label for="Localização">Localização</label>
                            </div>

                            <hr class="my-4">
                            <br>
                            <button class="btn btn-lg  btn-block text-uppercase" style="background: linear-gradient(to right, #8512a8, #e8eb3b);" type="submit">Comprar $67.000</button>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>