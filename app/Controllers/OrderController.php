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

    public function edit($id = null){
        $orders = new OrderModel();
        $dataOrder = $orders->find($id);
        return view('edit_order',[
            'dataOrder' => $dataOrder
        ]);
    }

    public function update($id = null){
        $dataOrder = array(
            'value' => $this->request->getVar('value'),
            'cnpj' => $this->request->getVar('cnpj'),
            'description' => $this->request->getVar('description')
        );

        $order = new OrderModel();

        $order->update($id, $dataOrder);
        return redirect()->to(base_url('/'))->with('status', 'Order editada com sucesso');
    }
}
