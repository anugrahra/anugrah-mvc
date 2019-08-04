<?php

class Podcast_model {
    private $table = 'episode';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllEpisode()
    {
        $this->db->query('SELECT * FROM ' . $this->table. ' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function getRecentEpisode()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 1');
        return $this->db->resultSet();
    }

    public function getEpisodeBySlug($slug)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE slug=:slug');
        $this->db->bind('slug', $slug);
        return $this->db->single();
    }

    public function getAllEpisodeLimited($perPage)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 0, ' . $perPage);
        return $this->db->resultSet();
    }

    public function getAllEpisodeLimitedFrom2($start, $perPage)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT ' . $start . ', ' . $perPage);
        return $this->db->resultSet();
    }

    public function addEpisode($data)
    {
        $data['slug'] = strtolower(str_replace(" ", "-", $data['judul']));

        $query = "INSERT INTO episode
                    VALUES
                ('', :no_episode, :judul, :anchor, :caption, :note, :slug)";

        $this->db->query($query);
        $this->db->bind('no_episode', $data['no_episode']);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('anchor', $data['anchor']);
        $this->db->bind('caption', $data['caption']);
        $this->db->bind('note', $data['note']);
        $this->db->bind('slug', $data['slug']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteEpisode($id)
    {
		$query = "DELETE FROM episode WHERE id = :id";
		$this->db->query($query);
		$this->db->bind('id', $id);
		$this->db->execute();
		
		return $this->db->rowCount();	
    }
}