<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table            = 'orders';

    protected $allowedFields    = [
        'cnpj','value','description'
    ];

  
}
