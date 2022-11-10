<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class OrderController extends BaseController
{
    public function index()
    {
        
    }

    public function create_order(){
        $dataOrder = array(
            'value' => $this->request->getVar('value'),
            'cnpj' => $this->request->getVar('cnpj'),
            'description' => $this->request->getVar('description')
        );
        $order = new OrderModel();
        // $order->insert($dataOrder);
        dd($order->findAll());

        return view('form_order');
    }

    public function get_order_form(){
        $order = new OrderModel();
        // $order->insert($dataOrder);
        dd($order->findAll());
        return view('form_order');
    }
}
