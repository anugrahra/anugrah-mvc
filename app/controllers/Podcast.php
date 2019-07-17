<?php

class Podcast extends Controller {
    public function index()
    {
        $data['title'] = 'Podcast dekadensiotak';
        $data['post'] = $this->model('Podcast_model')->getAllEpisode();
        $this->view('templates/header', $data);
        $this->view('podcast/index', $data);
        $this->view('templates/footer');
    }

    public function episode($slug)
    {
        $data['post'] = $this->model('Podcast_model')->getEpisodeBySlug($slug);
        $data['title'] = $data['post']['judul'] . ' | Podcast dekadensiotak';
        $this->view('templates/header', $data);
        $this->view('podcast/episode', $data);
        $this->view('templates/footer');
    }
}