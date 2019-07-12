<?php

class Home extends Controller {
    public function index()
    {
        $data['title'] = 'Anugrah Ramadhan - A Plumber who learns Coding';
        $this->view('home/index', $data);
    }
}