<?php

namespace Models\manager;

abstract class Manager implements iManager {


	public function loginDb()
	{

		try

		{
			$db = new PDO('mysql:host=localhost;dbnmae=project3;charset=utf8', 'root', '', 
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		}

		catch(Exception $e)

		{
			die("Erreur : " . $e->getMessage());
		}

	}	
}