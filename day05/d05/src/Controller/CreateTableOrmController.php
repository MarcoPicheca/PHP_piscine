<?php

namespace App\Controller;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;

final class CreateTableOrmController extends AbstractController
{
	#[Route(path:"/index_ex01", name:"index_ex01")]
	public function indexAction()
	{
		return $this->render("create_table_orm/create_orm_table.twig");
	}

	#[Route('create_table01', name: 'create_table01')]
	public function createTableOrm(EntityManagerInterface $entityManager): Response
	{
		$existingUser = $entityManager
    	->getRepository(User::class)
    	->findOneBy(['username' => 'giuse']);
		if ($existingUser) {
		    return new Response("Errore: username già registrato.");
		}
		$user = new User();
		$user -> setUsername("gius");
		$user -> setEmail("giuseIMP");
		$user -> setAddress("viale cazzone 1");
		$user -> setEnable(true);
		$user -> setBirthdate(new \DateTime('1990-01-04'));
		$user -> setName('giuseppe');
		$entityManager->persist($user);
		$entityManager->flush();
		return new Response("User added!");
	}
}
