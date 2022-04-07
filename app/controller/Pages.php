<?php
class Pages extends Controller
{

    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }

    public function index()
    {
        $post = $this->postModel->getPosts();
        $data = [
            'title' => 'welcome to the index page',
            'posts' => $post
        ];
        $this->view('pages/index', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'about page'
        ];
        $this->view('pages/about', $data);
    }
}
