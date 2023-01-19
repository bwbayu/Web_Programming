<?php
namespace App\Controllers;

use App\Models\Data_contactModel;

class Form extends BaseController{
    protected $contactModel;

    public function __construct(){
        $this->contactModel = new Data_contactModel;
    }

    public function index(){
        $contact = $this->contactModel->findAll();
        $data = [
            'title' => 'Daftar Kontak',
            'contactlist' => $contact,
            'linkcss' => 'main.css'
        ];

        return view('pages/contactlist', $data);
    }

    public function addcontact(){
        $this->contactModel->save([
            'Name_user' => $this->request->getPost('Name_user'),
            'Email_user' => $this->request->getPost('Email_user'),
            'Subject' => $this->request->getPost('Subject'),
            'Message' => $this->request->getPost('Message')
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/Form/');
    }

    public function delete($id){
        $this->contactModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/Form/');
    }
}

?>