<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'posts';
    protected $allowedFields = ['title', 'body', 'description', 'slug'];

    public function getPosts($slug = null) {
        if(!$slug) {
            return $this->findAll();
        }else {
            return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();
        }
    }
    public function getPostsAdmin($id = null) {
        if(!$id) {
            return $this->findAll();
        }else {
            return $this->asArray()
                    ->where(['id' => $id])
                    ->first();
        }
    }
}