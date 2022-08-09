<?php 

require_once('app/Controllers/Admin/BackendController.php');


class HomePageController extends BackendController
{
    public function index()
    {
        return $this->view('homepage/index.php');
    }
}