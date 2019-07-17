<?php

class Laboratory extends Controller {
    public function index()
    {
        $data['title'] = 'Laboratory | anugrah.club';
        $this->view('templates/header', $data);
        $this->view('templates/homelink');
        $this->view('laboratory/index', $data);
        $this->view('templates/homelinkbottom');
        $this->view('templates/footer');
    }
}