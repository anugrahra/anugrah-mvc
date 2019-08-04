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

    public function menu()
    {
        $data['title'] = 'Admin | Menu';
        $data['linkblog'] = ' / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/menu', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function addpost()
    {
        $data['title'] = 'Admin | Add New Post';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/addpost', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function addblogpost()
    {
        if($this->model('Blog_model')->addPost($_POST) > 0) {
            header('Location: ' . BASEURL . '/admin/editdeletepost/');
            exit;
        }
    }

    public function editdeletepost()
    {
        $data['title'] = 'Admin | Edit Post';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $data['list'] = $this->model('Blog_model')->getAllPost();
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/editdeletepost', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function addepisode()
    {
        $data['title'] = 'Admin | Add New Episode';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/addepisode', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function addpodcastepisode()
    {
        if($this->model('Podcast_model')->addEpisode($_POST) > 0) {
            header('Location: ' . BASEURL . '/admin/editdeleteepisode');
            exit;
        }
    }

    public function editdeleteepisode()
    {
        $data['title'] = 'Admin | Edit Episode';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $data['list'] = $this->model('Podcast_model')->getAllEpisode();
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/editdeleteepisode', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function deletepost($id)
    {
		if($this->model('Blog_model')->deletePost($id) > 0) {
			header('Location: ' . BASEURL . '/admin/editdeletepost');
			exit;
        }
    }

    public function deleteepisode($id)
    {
		if($this->model('Podcast_model')->deleteEpisode($id) > 0) {
			header('Location: ' . BASEURL . '/admin/editdeleteepisode');
			exit;
        }
    }

    public function logout()
    {
        $this->view('admin/logout');
    }
}