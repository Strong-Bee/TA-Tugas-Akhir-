<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['name', 'username', 'email', 'password', 'role'];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
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

    // Ambil semua user
    public function view()
    {
        return $this->findAll();
    }

    // Ambil user berdasarkan username
    public function getUser($username)
    {
        return $this->where('username', $username)->first();
    }

    // Ambil user berdasarkan ID
    public function getUserById($id)
    {
        return $this->find($id);
    }

    // Tambah user baru
    public function createUser($data)
    {
        return $this->insert($data);
    }

    // Update user
    public function updateUser($id, $data)
    {
        if (isset($data['password']) && $data['password'] != '') {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        } else {
            unset($data['password']); // jika password kosong, jangan update
        }
        return $this->update($id, $data);
    }

    // Hapus user
    public function deleteUser($id)
    {
        return $this->delete($id);
    }
}
