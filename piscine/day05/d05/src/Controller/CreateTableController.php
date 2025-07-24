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
	#[Route(path:"/create/table", name:"create_table")]
	public function CreateTable ()
	{
		$user = "marco1_ex00";
		$host = "127.0.0.1";
		$passwd = "marco123";
		$db = "ex00_db";
		$connection = new \mysqli($host, $user, $passwd, $db);
		if ($connection->connect_errno) {
			return new Response("Errore nella creazione dell'oggetto mysqli!");
		}
		$task = "";
		$form = $this->createFormBuilder($task)
			->add('click', SubmitType::class, ['label' => 'Clicked'])
			->getForm();
		if ($form->isSubmitted())
		{
			if ($connection->query("
				create table users(
					id int not null,
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
			else 
				return $this->render()
		}
	}
}
