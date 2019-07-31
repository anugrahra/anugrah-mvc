<?php

class Admin extends Controller {
    public function index()
    {
        $data['title'] = 'Admin';
        $data['linkblog'] = '';
        $data['error'] = '';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/index', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }
}