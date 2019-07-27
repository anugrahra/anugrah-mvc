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
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 3, ' . $perPage);
        return $this->db->resultSet();
    }

    public function getPostBySlug($slug)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE slug=:slug');
        $this->db->bind('slug', $slug);
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
}