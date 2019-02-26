<?php

namespace Models\manager;

use Models\entities\Post;


class ManagerPost extends Manager {


	public function add(Post $post)
	{
		$req = $db->prepare('INSERT INTO posts(title, content, date_creation, NOW()) ');
		       $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Post');

		$post = $request->fetchAll();
	}


	public function select(Post $post)
	{
		$req = $db->prepare('SELECT title, content, DATE_FORMAT(date_creation, \'%d/%m/%Y %Hh%imin%ss\') AS date_creation_fr FROM post');
		       $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Post');

		$post = $request->fetchAll();

	}


	public function set(Post $post)
	{
		$req = $db->prepare('UPDATE post SET title, content, date_creation WHERE title = ? ');
		       $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Post');

		$post = $request->fetchAll();
	}


	public function delete(Post $post)
	{
		$req = $db->prepare('DELETE FROM post WHERE title = ?');
		       $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Post');

		$post = $request->fetchAll();
	}



}