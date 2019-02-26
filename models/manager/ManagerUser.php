<?php

namespace Models\manager;

use Models\entities\User;


class ManagerUser extends Manager{


	public function add(User $user)
	{
		$request = $db->prepare('INSERT INTO users(pseudo, email, password) VALUES (?, ?, ?)');
				   $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');

		$user = $request->fetchAll();
		   
	}


	public function select(User $user)
	{
		$request = $db->prepare(' SELECT pseudo, email, password FROM users');
				   $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');

		while($data = $request->fetch())
		{
			echo '<p>' . $data['pseudo'] . '</p>';
		}

	}


	public function set(User $user)
	{
		$request = $db->prepare('UPDATE users SET pseudo, email, passwword WHERE pseudo = ?');
		           $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');

		$user = $request->fetchAll();
	}


	public function delete(User $user)
	{
		$request = $db->prepare('DELETE FROM users WHERE pseudo = ?');
		           $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'User');

		$user = $request->fetchAll();
		
	}

}