<?php

class Life extends Controller {
    public function index()
    {
        $data['title'] = 'Life | anugrah.club';
        $data['linkblog'] = '';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('life/index', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }
}