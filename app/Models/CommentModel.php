<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comment';
    protected $allowedFields = ['nom', 'body'];
}