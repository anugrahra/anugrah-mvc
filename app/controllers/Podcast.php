<?php

class Podcast extends Controller {
    public function index()
    {
        $data['title'] = 'Podcast dekadensiotak';
        $data['episodes'] = $this->model('Podcast_model')->getAllEpisodeLimited($perPage = 10);
        $data['recent'] = $this->model('Podcast_model')->getRecentEpisode();
        $data['linkblog'] = '';
        $this->view('templates/header', $data);
        $this->view('templates/homelink');
        $this->view('podcast/index', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['title'] = 'Podcast dekadensiotak';
        $data['episodes'] = $this->model('Podcast_model')->getAllEpisode();
        $data['recent'] = $this->model('Podcast_model')->getRecentEpisode();
        $data['linkblog'] = '';
        $this->view('templates/header', $data);
        $this->view('templates/homelink');
        $this->view('podcast/index', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function episode($slug)
    {
        $data['episode'] = $this->model('Podcast_model')->getEpisodeBySlug($slug);
        $data['title'] = $data['episode']['judul'] . ' | Podcast dekadensiotak';
        $this->view('templates/header', $data);
        $this->view('templates/homelink');
        $this->view('podcast/episode', $data);
        $this->view('templates/footer');
    }
}