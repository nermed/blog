<?php

namespace App\Models;

use CodeIgniter\Model;

class ValidationModel extends Model
{
    protected $table = 'posts';
    protected $allowedFields = ['username', 'email', 'password'];

    // public function getPosts($slug = null) {
    //     if(!$slug) {
    //         return $this->findAll();
    //     }

    //     return $this->asArray()
    //                 ->where(['slug' => $slug])
    //                 ->first();
    // }
}