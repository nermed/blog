<?php namespace App\Controllers;

class Comment extends BaseController
{
    public function getSelect($id){
        $db = $this->database();
        return $db->query('SELECT * FROM `posts` WHERE id = '.$id.'');
    }
    public function fetch($id){
        $db = $this->database();
        if($this->request->isAJAX()){
        $posts = $db->query('SELECT id, nom, comment FROM `comments` WHERE post_id = '.$id.'');
        echo json_encode($posts->fetch_all(MYSQLI_ASSOC));
        }else {
            echo 'failed';
        }
    }
    public function comment($id){
        $db = $this->database();
        $dataa = $_POST;
        if($this->request->isAJAX()){
        if(!empty($dataa['nom']) || !empty($dataa['comment'])){
            
            $nom = trim(htmlspecialchars($dataa['nom']));
            $comment = trim(htmlspecialchars($dataa['comment']));
            
            $comment = $db->query("INSERT INTO `comments` (nom, comment, post_id) VALUES ('$nom', '$comment', $id) ");
            echo json_encode($dataa);
        }
    }
    }
    public function database(){
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'essaie';
        $db = mysqli_connect($servername, $username, $password, $dbname);

        return $db;
    }

	//--------------------------------------------------------------------

}