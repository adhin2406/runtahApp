<?php

namespace App\Models;

use CodeIgniter\Model;

class saranModel extends Model
{
    protected $table = 'saran';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'saran'];


    public function saran($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
