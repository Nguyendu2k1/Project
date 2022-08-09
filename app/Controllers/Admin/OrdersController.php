<?php 

require_once('app/Controllers/Admin/BackendController.php');

require_once('app/Models/Order.php');

class OrdersController extends BackendController
{
    private $order;

    public function __construct()
    {
        $this->order = new Order();
    }
    public function index()
    {
        return $this->view('orders/index.php');
    }
}