<?php 
require_once('app/Controllers/Admin/BackendController.php');
require_once('app/Requests/Admin/AuthenticationRequest.php');
require_once('core/Auth.php');
require_once('core/Flash.php');
require_once('app/Models/Admin.php');

class AuthenticationController extends BackendController
{
    protected $admin;

    public function __construct()
    {
        $this->admin = new Admin();
    }

    public function index()
    {
        return $this->view('authentication/show-login-form.php');
    }

    public function login()
    {
        if(isset($_POST['login'])){
            $loginRequest = new AuthenticationRequest();
            $loginErrors = $loginRequest->validateLogin($_POST);
            
            if (count($loginErrors) == 0) {
                $admin = $this->admin->where(['email' => $_POST['email'], 'password' => $_POST['password']])->first();
                if (!empty($admin)) {
                    
                    return redirect('admin/homepage/index');
                }
                Flash::set('error', 'Sai thông tin đăng nhập');
                return redirect('admin/authentication/index');
            }
        
            return $this->view('authentication/show-login-form.php', ['errors' => $loginRequest->getErrors()]);
        }
    }
}