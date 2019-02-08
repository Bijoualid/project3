<?php

class Comments {

	private $id;
	private $author;
	private $comment;
	private $posted_date;


	public function getAuthor()
	{
		return $this->author;
	}


	public function getComment()
	{
		return $this->comment;
	}


	public function getPostedDate()
	{
		return $this->posted_date;
	}


	public function setAuthor($author)
	{
		$this->author = $author;
	}


	public function setComment($comment)
	{
		$this->comment = $comment;
	}


	public function setPostedDate($postedDate)
	{
		$this->posted_date = $postedDate;
	}


}