<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class OrderController extends BaseController
{
    public function index()
    {
        $order = new OrderModel();
        $listOrders = $order->findAll();

        return view('index',[
            'listOrders' => $listOrders
        ]);
    }

    public function create_order(){
        $dataOrder = array(
            'value' => $this->request->getVar('value'),
            'cnpj' => $this->request->getVar('cnpj'),
            'description' => $this->request->getVar('description')
        );
        $order = new OrderModel();

        return view('index');
    }

    public function get_order_form(){
        return view('form_order');
    }
}
