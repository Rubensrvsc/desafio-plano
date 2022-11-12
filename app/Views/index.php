<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/index.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(session()->getFlashdata('status'))
    {
    ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('status') ;?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
    }
    ?>


    <div class="presentation">
    <h2>Lista de Ordens</h2>
    <a href="<?php echo base_url('order') ?>" class="btn btn-primary">Criar nova ordem</a>
  </div>
  <div class="table_section">
    <table>
      <thead>
        <tr>
          <th>Descrição</th>
          <th>Valor</th>
          <th>Cnpj</th>
          <th>action</th>
        </tr>
      </thead>
      <?php foreach($listOrders as $order): ?>
      <tbody>
        <tr>
          <td><?= $order['description'] ?></td>
          <td><?= $order['value'] ?></td>
          <td><?= $order['cnpj'] ?></td>
          <td>
            <button>
              <a href="<?php echo base_url('order/edit/'.$order['id']) ?>" class="fa-solid fa-pen-to-square"></a>
            </button>
            <button>
              <a 
              href="<?php echo base_url('order/details/'.$order['id']) ?>" class="fa-solid fa-circle-info"></a>
            </button>
            <button>
              <a  onclick="return confirm('Deseja deletar essa ordem')" 
              href="<?php echo base_url('order/delete/'.$order['id']) ?>" class="fa-solid fa-trash"></a>
            </button>
          </td>
        </tr>
      </tbody>
      <?php endforeach; ?>
    </table>
  </div>

</body>
</html>