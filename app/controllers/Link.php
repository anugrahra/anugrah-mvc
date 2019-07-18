<?php

class Link extends Controller {
    public function index()
    {
        $data['title'] = 'Link | anugrah.club';
        $this->view('templates/header', $data);
        $this->view('templates/homelink');
        $this->view('link/index', $data);
        $this->view('templates/homelinkbottom');
        $this->view('templates/footer');
    }
}