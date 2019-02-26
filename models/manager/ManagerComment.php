<?php

namespace Models\manager;

use Models\entities\Comment;


class ManagerComment extends Manager {


	public function add(Comment $comment)
	{
		$req = $db->prepare('INSERT INTO comments(author, comment, posted_date) VALUES(?, ?, NOW())');
		       $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Comment');

		$post = $request->fetchAll();
	}


	public function select(Comment $comment)
	{
		$req = $db->prepare('SELECT author, comment, DATE_FORMAT(posted_date, \'%d/%m/%Y %Hh%imin%ss\') AS posted_date_fr FROM comments WHERE id = ?');

		       $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Post');

		$post = $request->fetchAll();
	}


	public function set(Comment $comment)
	{
		$req = $db->prepare('UPDATE comments SET author, comment, posted_date');
		       $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Post');

		$post = $request->fetchAll();
	}


	public function delete(Comment $comment)
	{
		$req = $db->prepare('DELETE FROM comments WHERE author = ?');
		       $request->execute();

		$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Post');

		$post = $request->fetchAll();
	}


}