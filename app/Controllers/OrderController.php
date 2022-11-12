<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;

class OrderController extends BaseController
{

    private $orderClass;

    public function __construct(){
        $this->orderClass = new OrderModel();
    }

    public function index()
    {
        $listOrders = $this->orderClass->findAll();

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
        $this->orderClass->insert($dataOrder);
        $listOrders = $this->orderClass->findAll();

        return redirect()->to(base_url('/'))->with('status', 'Ordem criada com sucesso');
    }

    public function get_order_form(){
        return view('form_order');
    }

    public function edit($id = null){
        $dataOrder = $this->orderClass->find($id);
        if (is_null($dataOrder)){
            return redirect()->to(base_url('/'))->with('status', 'Não foi possivel encontrar a ordem');
        }
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
        $this->orderClass->update($id, $dataOrder);
        return redirect()->to(base_url('/'))->with('status', 'Ordem editada com sucesso');
    }

    public function delete($id = null){
        $this->orderClass->delete($id);
        return redirect()->to(base_url('/'))->with('status', 'Ordem deletada com sucesso');
    }

    public function details($id = null){
        $order = $this->orderClass->find($id);
        if (is_null($order)){
            return redirect()->to(base_url('/'))->with('status', 'Não foi possivel encontrar a ordem');
        }
        return view('details',[
            'order' => $order
        ]);
    }
}
