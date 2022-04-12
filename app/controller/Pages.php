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
            'title'       => 'welcome to the index page',
            'description' => 'Simple social network for sharing your thoughts and ideas.',
        ];
        $this->view('pages/index', $data);
    }


    public function about()
    {
        $data = [
            'title' => 'About Us',
            'description' => 'App to share posts and ideas.',
        ];
        $this->view('pages/about', $data);
    }
}
