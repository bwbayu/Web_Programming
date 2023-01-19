<?php

namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'booking_user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['place', 'people', 'arrivals', 'leaving'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'place' => 'required',
        'people' => 'required',
        'arrivals' => 'required',
        'leaving' => 'required'
    ];
    protected $validationMessages   = [
        'place' => [
            'required'=>'Silahkan masukkan tempat liburan'
        ],
        'people' => [
            'required'=>'Silahkan masukkan jumlah orang yang akan liburan'
        ],
        'place' => [
            'required'=>'Silahkan masukkan tanggal keberangkatan liburan'
        ],
        'place' => [
            'required'=>'Silahkan masukkan tanggal kepulangan liburan'
        ],
    ];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
