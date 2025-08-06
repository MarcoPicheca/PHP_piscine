<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
final class CreateTableController extends AbstractController
{
	#[Route ("/", name:"day05_home")]
	public function indexAction()
	{
		return $this->render("home.html.twig");
	}

	#[Route ("/index_ex00", name:"index_ex00")]
	public function indexEx00()
	{
		return $this->render("ex00/create_table.html.twig");
	}

	
	#[Route(path:"/create_table00", name:"create_table00")]
	public function CreateTable ()
	{
		$user = "marco2";
		$host = "127.0.0.1";
		$passwd = "symfony123";
		$db = "ex_00";
		$connection = new \mysqli($host, $user, $passwd, $db);
		if ($connection->connect_errno) {
			return new Response("Errore nella creazione dell'oggetto mysqli!");
		}
		if ($connection->query("
			create table if not exists users(
				id int ,
				usarname varchar(255) not null unique,
				name varchar(255) not null,
				email varchar(255) not null unique,
				enable boolean,
				birthdate datetime,
				address longtext,
				primary key(id)
			);
		") === false)
			return new Response("Errore nella creazione della tabella!");
		return new Response ("Success!");
	}
}
