<?php  
class Post {
  
    private $db;

    //create constructor
    public function __construct()
    {
        $this->db = new Database();
    }


    //create a method to get all posts
    public function getPosts()
    {
        $this->db->query('SELECT * FROM posts');
        return $this->db->resultSet();
    }
}

