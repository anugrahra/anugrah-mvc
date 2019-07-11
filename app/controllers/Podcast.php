<?php

class Podcast extends Controller {
    public function index()
    {
        $data['title'] = 'Podcast dekadensiotak';
        // $data['post'] = $this->model('Podcast_model')->getAllEpisode();
        $this->view('templates/header', $data);
        $this->view('podcast/index', $data);
        $this->view('templates/footer');
    }

    public function episode($id)
    {
        $data['title'] = 'Nanti diambil dari database';
        // $data['post'] = $this->model('Podcast_model')->getEpisodeById($id);
        $this->view('templates/header', $data);
        $this->view('podcast/episode', $data);
        $this->view('templates/footer');
    }
}