<?php
class Pages extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'welcome to the index page'
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
