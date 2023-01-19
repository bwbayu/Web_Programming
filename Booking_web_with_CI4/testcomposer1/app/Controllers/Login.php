<?php 
namespace App\Controllers; 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('pages/loginform');
    } 
    
    //authorize
    public function auth()
    {
        $session = session();
        $model = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        //jika data sesuai
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id'],
                    'nama'     => $data['nama'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/Form/');
            }
            //jika salah password
            else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('page/login');
            }
        }
        //jika email tidak ditemukan
        else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('page/login');
        }
    }
 
    //melakukan logout
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
} 