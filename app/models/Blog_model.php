<?php

class Blog_model {
    private $table = 'blogpost';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPost()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function getAllPostLimited($perPage)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 0, ' . $perPage);
        return $this->db->resultSet();
    }

    public function getAllPostLimitedFrom2($start, $perPage)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT ' . $start . ', ' . $perPage);
        return $this->db->resultSet();
    }

    public function getPostBySlug($slug)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE slug=:slug');
        $this->db->bind('slug', $slug);
        return $this->db->single();
    }

    public function getPostById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function getAllPostByTag($tag)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tag=:tag');
        $this->db->bind('tag', $tag);
        return $this->db->resultSet();
    }

    public function forTagLabel($tag)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE tag=:tag LIMIT 1');
        $this->db->bind('tag', $tag);
        return $this->db->resultSet();
    }

    public function addPost($data)
    {
        $data['slug'] = strtolower(str_replace(" ", "-", $data['judul']));
        $data['waktu'] = time();

        $query = "INSERT INTO blogpost
                    VALUES
                ('', :judul, :isi, :waktu, :tag, :slug)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('waktu', $data['waktu']);
        $this->db->bind('tag', $data['tag']);
        $this->db->bind('slug', $data['slug']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editPost($data)
    {
        $data['slug'] = strtolower(str_replace(" ", "-", $data['judul']));

        $query = "UPDATE blogpost
                    SET
                    judul = :judul,
                    isi = :isi,
                    tag = :tag,
                    slug = :slug
                    WHERE id = :id";

		$this->db->query($query);
		$this->db->bind('judul', $data['judul']);
		$this->db->bind('isi', $data['isi']);
		$this->db->bind('tag', $data['tag']);
		$this->db->bind('slug', $data['slug']);
        $this->db->bind('id', $data['id']);
        
        $this->db->execute();
        
		return $this->db->rowCount();
    }

    public function deletePost($id)
    {
		$query = "DELETE FROM blogpost WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();
		
		return $this->db->rowCount();	
    }
}