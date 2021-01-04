<?php 

namespace App\Controllers;

use App\Models\BlogModel;

class Admin extends BaseController
{
    
    public function list() {
        $model = new BlogModel();
        $data['news'] = $model->getPostsAdmin();

        echo view('templates/header', $data);
        echo view('admin/post');
        echo view('templates/footer');
    }

    public function create() {
        helper('form');
        $model = new BlogModel();

        if(!$this->validate([
            'title' => 'required|min_length[3]',
            'description' => 'required',
            'body' => 'required'
        ])) {

            echo view('templates/header');
            echo view('blog/create');
            echo view('templates/footer');
        } else {
            $model->save(
                [
                    'title' => $this->request->getVar('title'),
                    'description' => $this->request->getVar('description'),
                    'body' => $this->request->getVar('body'),
                    'slug' => url_title($this->request->getVar('title'))
                ]
            );

            $session = \Config\Services::session();
            $session->setFlashdata('success', 'New post created');

            return redirect()->to('/');
        }
    }

	//--------------------------------------------------------------------

}