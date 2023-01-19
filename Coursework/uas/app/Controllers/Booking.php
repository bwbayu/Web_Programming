<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\BookModel;

class Booking extends ResourceController
{
    use ResponseTrait;
    function __construct(){
        $this->model = new BookModel();
    }

    public function index()
    {
        $data = $this->model->orderBy('id')->findAll();
        // return $this->respond($data);
        $data1 = [
            'bookinglist' => $data
        ];
        return view('/pages/bookinglist', $data1);
    }

    public function show($id = null)
    {
        $data = $this->model->where('id', $id)->findAll();
        if($data){
            return $this->respond($data);
        }
        else{
            return $this->failNotFound("Data tidak ditemukan untuk id $id");
        }
    }

    public function create()
    {
        $data = [
            'place' => $this->request->getVar('place'),
            'people' => $this->request->getVar('people'),
            'arrivals' => $this->request->getVar('arrivals'),
            'leaving' => $this->request->getVar('leaving')
        ];
        if(!$this->model->save($data)){
            return $this->fail($this->model->errors());
        }
        // $response = [
        //     'status'=>201,
        //     'error'=>null,
        //     'messages'=>[
        //         'success'=>'Berhasil insert data'
        //     ]
        // ];
        // return $this->respond($response);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/');
    }

    public function update($id = null)
    {
        $data = $this->request->getRawInput();
        $data['id'] = $id;

        $cek = $this->model->where('id', $id)->findAll();
        if(!$cek){
            return $this->failNotFound("Data tidak ditemukan untuk id $id");
        }

        if(!$this->model->save($data)){
            return $this->fail($this->model->errors());
        }

        $response = [
            'status' => 200,
            'error'=>null,
            'messages' => [
                'success'=>"Berhasil update data dengan id $id"
            ]
        ];
        return $this->respond($response);
    }

    public function delete($id = null)
    {
        $data = $this->model->where('id', $id)->findAll();
        if($data){
            $this->model->delete($id);
            // $response = [
            //     'status' => 200,
            //     'error' => null,
            //     'messages' => [
            //         'success' => "Data id $id berhasil di hapus!"
            //     ]
            // ];
            // return $this->respondDeleted($response);
            session()->setFlashdata('pesan', 'Data berhasil dihapus.');
            return redirect()->to('/booking/');
        }else{
            session()->setFlashdata('pesan', 'Data tidak ditemukan.');
            return redirect()->to('/booking/');
        }
    }
}
