<?php  

class Pages {
    public function __construct() {
        
    }

    public function index() {
        echo 'Hello from the index method of the Pages controller!';
    }


    public function about($id)
    {
       echo "this is About" . $id;
    }
}