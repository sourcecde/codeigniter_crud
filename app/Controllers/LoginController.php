<?php
namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    // login form
    public function index(){
        return view('login');
    }

    public function checkLogin()
    {
        $loginModel = new LoginModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');


        /*if(empty($username) || empty($password))
        {
            $data['error']='Username and Password not match!';
            return view('login', $data);
        }*/

    }
}
