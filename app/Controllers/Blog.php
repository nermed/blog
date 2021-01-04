<?php 

namespace App\Controllers;

use App\Models\BlogModel;
use App\Models\CommentModel;
use PDO;

class Blog extends BaseController
{
    public function getSelect($id){
        $db = $this->database();
        return $db->query('SELECT * FROM `posts` WHERE id = '.$id.'');
    }
    public function post($id)
    {
        $db = $this->database();

        $posts_id = $db->query('SELECT * FROM `posts` AS p  WHERE p.id = '.$id.'');
        $data['posts'] = $posts_id;
        
        $query = $db->query('SELECT nom, comment, post_id, c.created_at
                            FROM `comments` AS c
                            LEFT JOIN `posts` AS p ON p.id = c.post_id WHERE c.post_id = '.$id.'');
        $comments = $query;

        $data['comments'] = $comments;
        echo view('templates/header', $data);
        echo view('blog/post');
        echo view('templates/footer');
    }
    public function update($id) {
        //$db = $this->database();
        session_start();;
        $post_id = $this->getSelect($id);

            $data = $_POST;
        if(isset($data['title']) || isset($data['description']) || isset($data['body']) || isset($data['slug']) || isset($data['tag'])){
          if(!empty($data['title']) || !empty($data['description']) || !empty($data['body']) || !empty($data['slug']) || !empty($data['tag'])){
            
             $title = trim(htmlspecialchars($data['title']));
             $description = trim(htmlspecialchars($data['description']));
             $body = trim(htmlspecialchars($data['body']));
             $tag = trim(htmlspecialchars($data['tag']));
             $slug = $title;
             if($this->database()->connect_error){
                 die("connexion failed". $this->database()->connect_error);
             }
             
             $sql = "UPDATE `posts` SET title = '$title', description = '$description', body= '$body', slug = '$slug', tag = '$tag' WHERE id = ".$id." ";

            if($this->database()->query($sql) === TRUE){
                session_destroy();
                return redirect()->to('/');
            } else {
                echo "Error: ".mysqli_error($this->database());
            }
            $this->database()->close();
         }
        }

        
         
         $dataa['post'] = $post_id;
 
        echo view('templates/header', $dataa);
        echo view('blog/update');
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
    public function create() {

        $data = $_POST;

        if(isset($_POST['title']) || isset($_POST['description']) || isset($_POST['body']) || isset($_POST['tag']) || isset($_POST['slug'])){
        if(!empty($data['title']) || !empty($data['description']) || !empty($data['body']) || !empty($data['slug']) || !empty($data['tag'])){
            
            $title = trim(htmlspecialchars($data['title']));
            $description = trim(htmlspecialchars($data['description']));
            $body = trim(htmlspecialchars($data['body']));
            $tag = trim(htmlspecialchars($data['tag']));
            $slug = $title;
            if($this->database()->connect_error){
                die("connexion failed". $this->database()->connect_error);
            }
            $sql = "INSERT INTO `posts` (title, description, body, slug, tag) VALUES ('$title', '$description', '$body', '$slug', '$tag') ";
           if($this->database()->query($sql) === TRUE){
               return redirect()->to('/');
           } else {
               echo "Error: ".mysqli_error($this->database());
           }
           $this->database()->close();
        }else{
            echo 'Remplissez les champs';
        }
    }
            echo view('templates/header', $data);
            echo view('blog/create');
            echo view('templates/footer');
    }
    public function delete($id){
        //$db->query('');
        if($this->request->isAJAX()){
        $post = $this->delet($id);
        echo json_encode($post);
        } else{
        echo 'failed';
        }
    }
    protected $likes = false;
    public function __constructor($likes){
        $this->likes = $likes;
    }
    public function liked($id){
        if($this->request->isAjax()){
        if(isset($_POST['likes'])){
        $likee = !($this->likes);
        $like = $this->database()->query("INSERT INTO `posts` (liked) VALUES ('$likee') WHERE id = '$id'");
        var_dump($like); die();
        echo json_encode($like);
        }
        }else {
            echo 'failed';
        }
    }
    public function delet($id){
        $post = $this->database()->query('DELETE FROM `posts` WHERE id= '.$id.' ');
        return $post;
    }

	//--------------------------------------------------------------------

}