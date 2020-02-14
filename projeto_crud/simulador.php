<?php
$qtdreais=0;
$meses=0;
$porc=0;
$result="";
if ($_POST) {
    $qtdreais=$_POST["qtdreais"];
    $meses=$_POST["meses"];
    $porc=$_POST["porc"];

    $result=($qtdreais/$porc)*$meses;
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>CONVERSOR</title>
</head>

<body>
    <?php include 'navBar.php' ?>
    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-4">
                <form method="POST" action="">
                    <div class="form-group">
                        <br>
                        <label>Quantidade de Reais</label>
                        <input type="float" class="form-control" id="qtdreais" name="qtdreais" value="0" min="0">
                        <br>
                        <label>Meses</label>
                        <input type="number" class="form-control" id="meses" name="meses" value="0" min="0">
                        <br>
                        <label>Porcentagem ao mês de rendimento</label>
                        <input type="float" class="form-control" id="porc" name="porc" value="0" min="0">
                        <br>
                        <label>Total</label>
                        <input type="number" class="form-control" id="total" disabled value="<?php echo $result ?>">
                        <br>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">SIMULAR</button>
                    </div>
                    
                </form>
            </div>

            <div class="col-4">

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>