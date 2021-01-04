<?php namespace App\Controllers;

use App\Controllers\Blog;

class Pages extends BaseController
{
	public function index()
	{

        $db = $this->database();
        $query_post = $db->query('SELECT * FROM `posts`');
        $data['news'] = $query_post;

		echo view('templates/header', $data);
        echo view('pages/home');
        echo view('templates/footer');
    }
    public function database(){
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'essaie';
        $db = mysqli_connect($servername, $username, $password, $dbname);

        return $db;
    }
    public function all($pages = 'home')
    {
        if(!is_file(APPPATH.'Views/pages/'.$pages.'.php'))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($pages);
        }
        echo view('templates/header');
        echo view('pages/'.$pages);
        echo view('templates/footer');
    }

	//--------------------------------------------------------------------

}
