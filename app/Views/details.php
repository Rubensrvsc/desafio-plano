<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css">
</head>
<body>
    <div class="container">
    <div class="card">
        <h5 class="card-header">Detalhes da ordem</h5>
        <div class="card-body">
            <h5 class="card-title">Descrição: <?= $order['description'] ?> </h5>
            <p class="card-text">Valor: <?= $order['description'] ?></p>
            <p class="card-text">Cnpj: <?= $order['cnpj'] ?></p>
        <a href="<?php echo base_url('/') ?>" class="btn btn-primary">Voltar Para Home</a>
    </div>
    </div>
</div>
</body>
</html>