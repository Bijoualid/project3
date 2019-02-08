<?php

class Posts {

	private $id;
	private $title;
	private $content;
	private $date_creation;


	public function getTitle()
	{
		return $this->title;
	}


	public function getContent()
	{
		return $this->content;
	}


	public function getDateCreation()
	{
		return $this->date_creation;
	}


	public function setTitle($title)
	{
		$this->title = $title;
	}


	public function setContent($content)
	{
		$this->content = $content;
	}


	public function setDateCreation($dateCreation)
	{
		$this->date_creation = $dateCreation;
	}


}