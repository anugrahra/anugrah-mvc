<?php

class Life extends Controller {
    public function index()
    {
        $data['title'] = 'Life | anugrah.club';
        $this->view('templates/header', $data);
        $this->view('templates/homelink');
        $this->view('life/index', $data);
        $this->view('templates/homelinkbottom');
        $this->view('templates/footer');
    }
}