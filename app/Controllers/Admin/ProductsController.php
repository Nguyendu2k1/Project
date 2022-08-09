<?php 

require_once('app/Controllers/Admin/BackendController.php');
require_once('core/Storage.php');
require_once('app/Models/Product.php');

class ProductsController extends BackendController
{
    private $product;

    public function __construct()
    {
        $this->product = new Product();
    }
    public function index()
    {
        return $this->view('products/index.php');
    }
    public function showUpdateForm()
    {
        return $this->view('products/update-form.php');
    }
    public function update()
    {
        $id = $_GET['id'];
        
        if($_FILES['upload']['error']>0){
            $image = $this->product->image();
            $_POST['image'] = $image['image'];
        } else{
            $storage = new Storage();
            $upload = $storage->upload($_FILES, 'images');
            $_POST['image'] = 'images/'.$_FILES['upload']['name'];
        }
        
        $this->product->update($_POST, $id);
        return redirect('admin/products/index');
    }
    public function showCreateForm()
    {
        return $this->view('products/create-form.php');
    }
    public function create()
    {
        if($_FILES['upload']['error']>0){
            $_POST['image'] = '';
        } else{
            $storage = new Storage();
            $upload = $storage->upload($_FILES, 'images');
            $_POST['image'] = 'images/'.$_FILES['upload']['name'];
        }
        
        $this->product->create($_POST);
        return redirect('admin/products/index');
    }
    public function delete()
    {   
        $id = $_GET['id'];
        $this->product->delete($id);
        return redirect('admin/products/index');
    }
}