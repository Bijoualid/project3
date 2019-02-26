<?php

namespace Models\entities;

class User {

	private $id;
	private $pseudo;
	private $email;
	private $password;


	public function getPseudo()
	{
		return $this->pseudo;
	}


	public function getEmail()
	{
		return $this->email;
	}


	public function getPassword()
	{
		return $this->password;
	}


	public function setPseudo($pseudo)
	{
		$this->pseudo = $pseudo;
	}


	public function setEmail($email)
	{
		$this->email = $email;
	}


	public function setPassword($password)
	{
		$this->password = $password;
	}

}