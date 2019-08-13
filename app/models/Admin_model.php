<?php

class Admin_model {
    private $table = 'akun';
    private $db;

    public function __construct()
	{
		$this->db = new Database;
    }
    
	public function login($data)
	{
		$query = "SELECT * FROM akun WHERE username = :username AND password = :password";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);
		$this->db->execute();
		return $this->db->rowCount();
	}
	
	public function logout()
	{
		$_SESSION = [];
		session_unset();
		session_destroy();
		header('Location: ' . BASEURL . '/admin');
	}
}