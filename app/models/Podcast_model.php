<?php

class Podcast_model {
    private $table = 'podcast';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllEpisode()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getEpisodeBySlug($slug)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE slug=:slug');
        $this->db->bind('slug', $slug);
        return $this->db->single();
    }
}