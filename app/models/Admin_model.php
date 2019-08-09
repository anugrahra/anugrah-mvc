<?php

class Admin_model {
    private $table = 'akun';
    private $db;

    public function __construct()
	{
		$this->db = new Database;
    }
    
	public function sistemLogin($data)
	{
		$query = "SELECT * FROM akun WHERE username = :username AND password = :password";
		$this->db->query($query);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', md5($data['password']));
		$this->db->execute();
		return $this->db->rowCount();
	}
	public function sistemLogout()
	{
		setcookie('signin', '', time() - 3600);
		$_SESSION = [];
		session_unset();
		session_destroy();
		header('Location: ' . BASEURL . '/admin');
	}
}