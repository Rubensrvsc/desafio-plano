<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/form.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h1>Formulário de edição de ordem</h1>
    <form method="post" action=<?= base_url("order/update/".$dataOrder['id']) ?>>
    <input type="hidden" name="_method" value="PUT">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Descrição</label>
        <input type="text" class="form-control" value="<?= $dataOrder['description'] ?>" id="exampleFormControlInput1" name="description" required>
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Valor da ordem</label>
        <input type="number" class="form-control" value="<?= $dataOrder['value'] ?>" id="exampleFormControlInput1" name="value" required>
    </div>

    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Cnpj</label>
        <input type="text" class="form-control" value="<?= $dataOrder['cnpj'] ?>" id="exampleFormControlInput1" name="cnpj" required>
    </div>
        <input type="submit" value="Editar" class="btn btn-primary">
    </form>
    <div class="back_to_home">
    <a href="<?php echo base_url('/') ?>" class="btn btn-primary">Voltar Para home</a>
    </div>
    </div>
</body>
</html>