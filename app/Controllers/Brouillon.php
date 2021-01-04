<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	
    // public function validation(){
    //     $db = new PDO('mysql:dbname=essaie;host=localhost','root','');

    //     if(isset($_POST['title']) AND isset($_POST['description']) AND isset($_POST['body'])){
    //         if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['body'])){
    //             $title = trim(htmlspecialchars($_POST['title']));
    //             $description = trim(htmlspecialchars($_POST['description']));
    //             $body = trim(htmlspecialchars($_POST['body']));

    //             if(strlen($title) >= 10){
                    
    //             } else {
    //                 $error = 'Title is short';
    //             }
    //         }
    //     }
	// }
	// public function create() {
    //     // $servername = 'localhost';
    //     // $username = 'root';
    //     // $password = '';
    //     // $dbname = 'essaie';
    //     // $db = mysqli_connect($servername, $username, $password, $dbname);

    //     $data = $_POST;


    //     if(!empty($data['title']) || !empty($data['description']) || !empty($data['body']) || !empty($data['slug'])){
            
    //         $title = trim(htmlspecialchars($data['title']));
    //         $description = trim(htmlspecialchars($data['description']));
    //         $body = trim(htmlspecialchars($data['body']));
    //         $slug = $title;
    //         if($this->database()->connect_error){
    //             die("connexion failed". $this->database()->connect_error);
    //         }
    //         $sql = "INSERT INTO `posts` (title, description, body, slug) VALUES ('$title', '$description', '$body', '$slug') ";
    //        if($this->database()->query($sql) === TRUE){
    //            return redirect()->to('/');
    //        } else {
    //            echo "Error: ".mysqli_error($this->database());
    //        }
    //        $this->database()->close();
    //         // $req = $db->prepare('SELECT title, description, body FROM `posts` 
    //          //                   WHERE title = :title, description= :description, body= :body, slug');
    //         //$post = $req->execute(array(':title' => $title,':description' => $description,':body' => $body, ':title' => $slug));
    //         //var_dump($post);
    //     }
    //         echo view('templates/header', $data);
    //         echo view('blog/create');
    //         echo view('templates/footer');
    //         // $post = $req->execute(array(':title' => $title,':description' => $description,':body' => $body, ':title' => $slug));
    //         // var_dump($_POST);
    //         // $req1 = $req->execute(array($title, $description, $body));
    //         // var_dump($req1);
    //         //return redirect()->to('/');
    
    //     // var_dump($_POST['title']);
    //     // if(isset($_POST['title']) AND isset($_POST['description']) AND isset($_POST['body']) AND isset($_POST['slug'])){
    //     //     if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['body']) AND !empty($_POST['slug'])){
    //     //         $title = trim(htmlspecialchars($_POST['title']));
    //     //         $description = trim(htmlspecialchars($_POST['description']));
    //     //         $body = trim(htmlspecialchars($_POST['body']));
    //     //         $slug = trim(htmlspecialchars($_POST['slug']));

    //     //         if(strlen($title) >= 10){
    //     //             if($slug == $title){
    //     //                 $req = $db->prepare('INSERT INTO (title, description, body, slug) VALUES (?, ?, ?, ?)');
    //     //             $req->execute(array($title, $description, $body, $title));

    //     //             }
                    
    //     //         } else {
    //     //             $error = 'Titre est court';
    //     //         }
                
    //     //         echo view('templates/header');
    //     //         echo view('blog/create');
    //     //         echo view('templates/footer');
    //     //     }else {
    //     //         $error = 'Remplissez les champs';
    //     //     }
    //     // }
    //     //INSERT INTO `posts` (`id`, `title`, `body`, `description`, `slug`, `created_at`) VALUES
    //     // helper('form');
    //     // $model = new BlogModel();

    //     // if(!$this->validate([
    //     //     'title' => 'required|min_length[3]',
    //     //     'description' => 'required',
    //     //     'body' => 'required'
    //     // ])) {

    //     //     echo view('templates/header');
    //     //     echo view('blog/create');
    //     //     echo view('templates/footer');
    //     // } else {
    //     //     $model->save(
    //     //         [
    //     //             'title' => $this->request->getVar('title'),
    //     //             'description' => $this->request->getVar('description'),
    //     //             'body' => $this->request->getVar('body'),
    //     //             'slug' => url_title($this->request->getVar('title'))
    //     //         ]
    //     //     );

    //     //     $session = \Config\Services::session();
    //     //     $session->setFlashdata('success', 'New post created');

    //     //     return redirect()->to('/');
    //     // }
    // }

	//--------------------------------------------------------------------

}
