<?php

class Admin extends Controller {
    
    public function index()
    {
        if(isset($_SESSION['login'])) header('Location: ' . BASEURL . '/admin/menu');

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
            echo '<script type="text/javascript">'; 
            echo 'alert("Wrong, man! You are wrong!");'; 
            echo 'window.location.href = "admin";';
            echo '</script>';
        }
    }

    public function menu()
    {
        if(!isset($_SESSION['login'])) header('Location: ' . BASEURL . '/admin');

        $data['title'] = 'Admin | Menu';
        $data['linkblog'] = ' / <a href="logout">logout</a>';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/menu', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    // BLOG
    public function addpost()
    {
        if(!isset($_SESSION['login'])) header('Location: ' . BASEURL . '/admin');

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
            Flasher::setFlash('Post', 'berhasil', 'ditambahkan', 'green');
            header('Location: ' . BASEURL . '/admin/editdeletepost');
            exit;
        } else {
            Flasher::setFlash('Post', 'gagal', 'ditambahkan', 'red');
            header('Location: ' . BASEURL . '/admin/editdeletepost');
            exit;
        }
    }

    public function editdeletepost()
    {
        if(!isset($_SESSION['login'])) header('Location: ' . BASEURL . '/admin');

        $data['title'] = 'Admin | Edit Post';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $data['list'] = $this->model('Blog_model')->getAllPost();
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/editdeletepost', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function editpost($id)
    {
        if(!isset($_SESSION['login'])) header('Location: ' . BASEURL . '/admin');

        $data['linkblog'] = ' / <a href="../menu">menu</a> / <a href="../editdeletepost">edit/delete</a> / <a href="../logout">logout</a>';
        $data['post'] = $this->model('Blog_model')->getPostById($id);
        $data['title'] = 'Edit ' . $data['post']['judul'] . ' | Admin';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/editpost', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function editthispost()
    {
        if($this->model('Blog_model')->editPost($_POST) > 0) {
            Flasher::setFlash('Post', 'berhasil', 'diubah', 'green');
            header('Location: ' . BASEURL . '/admin/editdeletepost');
            exit;
        } else {
            Flasher::setFlash('Post', 'gagal', 'diubah', 'red');
            header('Location: ' . BASEURL . '/admin/editdeletepost');
            exit;
        }
    }

    public function deletepost($id)
    {
		if($this->model('Blog_model')->deletePost($id) > 0) {
            Flasher::setFlash('Post', 'berhasil', 'dihapus', 'green');
			header('Location: ' . BASEURL . '/admin/editdeletepost');
            exit;
        } else {
            Flasher::setFlash('Post', 'gagal', 'dihapus', 'red');
            header('Location: ' . BASEURL . '/admin/editdeletepost');
            exit;
        }
    }
    // END OF BLOG

    // PODCAST
    public function addepisode()
    {
        if(!isset($_SESSION['login'])) header('Location: ' . BASEURL . '/admin');

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
            Flasher::setFlash('Episode', 'berhasil', 'ditambahkan', 'green');
            header('Location: ' . BASEURL . '/admin/editdeleteepisode');
            exit;
        } else {
            Flasher::setFlash('Episode', 'gagal', 'ditambahkan', 'red');
            header('Location: ' . BASEURL . '/admin/editdeleteepisode');
            exit;
        }
    }

    public function editdeleteepisode()
    {
        if(!isset($_SESSION['login'])) header('Location: ' . BASEURL . '/admin');

        $data['title'] = 'Admin | Edit Episode';
        $data['linkblog'] = ' / <a href="menu">menu</a> / <a href="logout">logout</a>';
        $data['list'] = $this->model('Podcast_model')->getAllEpisode();
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/editdeleteepisode', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function editepisode($id)
    {
        if(!isset($_SESSION['login'])) header('Location: ' . BASEURL . '/admin');

        $data['linkblog'] = ' / <a href="../menu">menu</a> / <a href="../editdeleteepisode">edit/delete</a> / <a href="../logout">logout</a>';
        $data['episode'] = $this->model('Podcast_model')->getEpisodeById($id);
        $data['title'] = 'Edit ' . $data['episode']['no_episode'] . '. ' . $data['episode']['judul'] . ' | Admin';
        $this->view('templates/header', $data);
        $this->view('templates/homelink', $data);
        $this->view('admin/editepisode', $data);
        $this->view('templates/homelinkbottom', $data);
        $this->view('templates/footer');
    }

    public function editthisepisode()
    {
        if($this->model('Podcast_model')->editEpisode($_POST) > 0) {
            Flasher::setFlash('Episode', 'berhasil', 'diubah', 'green');
            header('Location: ' . BASEURL . '/admin/editdeleteepisode');
            exit;
        } else {
            Flasher::setFlash('Episode', 'gagal', 'diubah', 'red');
            header('Location: ' . BASEURL . '/admin/editdeleteepisode');
            exit;
        }
    }

    public function deleteepisode($id)
    {
		if($this->model('Podcast_model')->deleteEpisode($id) > 0) {
            Flasher::setFlash('Episode', 'berhasil', 'dihapus', 'green');
			header('Location: ' . BASEURL . '/admin/editdeleteepisode');
			exit;
        } else {
            Flasher::setFlash('Episode', 'gagal', 'dihapus', 'red');
			header('Location: ' . BASEURL . '/admin/editdeleteepisode');
			exit;
        }
    }
    // END OF PODCAST

    public function logout()
    {
        return $this->model('Admin_model')->logout();
    }
}