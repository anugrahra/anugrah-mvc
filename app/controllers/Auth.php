<?php

class Auth extends Controller {
    
    public function index()
    {
        $data['title'] = 'Admin';
        $data['linkblog'] = '';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/index', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }
    
    public function login()
    {
        //cek username
        if($this->model('Admin_model')->login($_POST) > 0) {
            $_SESSION['login'] = true;
            header('Location: ' . BASEURL . '/admin/menu');
            exit;
        } else {
            header('Location: http://localhost/anugrah-mvc');
            exit;
        }
    }

}
