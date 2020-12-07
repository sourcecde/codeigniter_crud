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
}
