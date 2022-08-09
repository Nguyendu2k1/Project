<?php 

require_once('app/Controllers/Admin/BackendController.php');
require_once('core/Storage.php');
require_once('app/Models/Category.php');


class CategoriesController extends BackendController
{
    private $category;

    public function __construct()
    {
        $this->category = new Category();
    }
    public function index()
    {
        return $this->view('categories/index.php');
    }
    public function showUpdateForm()
    {
        return $this->view('categories/update-form.php');
    }
    public function update()
    {
        $id = $_GET['id'];
        if($_FILES['upload']['error']>0){
            $image = $this->category->image();
            $_POST['image'] = $image['image'];
        } else{
            $storage = new Storage();
            $upload = $storage->upload($_FILES, 'categories');
            $_POST['image'] = 'categories/'.$_FILES['upload']['name'];
        }
        
        $this->category->update($_POST, $id);
        return redirect('admin/categories/index');
    }
    public function showCreateForm()
    {
        return $this->view('categories/create-form.php');
    }
    public function create()
    {
        if($_FILES['upload']['error']>0){
            $_POST['image'] = '';
        } else{
            $storage = new Storage();
            $upload = $storage->upload($_FILES, 'categories');
            $_POST['image'] = 'categories/'.$_FILES['upload']['name'];
        }
        
        $this->category->create($_POST);
        return redirect('admin/categories/index');
    }
    public function delete()
    {   
        $id = $_GET['id'];
        $this->category->delete($id);
        return redirect('admin/categories/index');
    }
}