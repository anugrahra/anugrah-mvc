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

    public function getAllPostLimited()
    {

        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
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
}