<?php
namespace App\Models;

use CodeIgniter\Model;

class Data_contactModel extends Model{
    protected $table = 'data_contact';
    protected $useTimestamps = true;
    protected $allowedFields = ['Name_user', 'Email_user', 'Subject', 'Message'];

}

?>