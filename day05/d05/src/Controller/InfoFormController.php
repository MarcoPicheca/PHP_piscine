<?php

namespace App\Controller;

use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Form\InfoFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Connection;
use DateTimeInterface;

final class InfoFormController extends AbstractController
{
	#[Route ("/", name:"day05_home")]
	public function indexAction()
	{
		return $this->render("home.html.twig");
	}

	#[Route ("/ex02", name:"ex02")]
	public function indexEx02()
	{
		return $this->redirectToRoute("ex02_create_table02");
	}
	
	#[Route(path:"/ex02/create_table02", name:"ex02_create_table02")]
	public function InfoForm()
	{
		$user = "marco2";
		$host = "127.0.0.1";
		$passwd = "symfony123";
		$db = "ex_02";
		$connection = new \mysqli($host, $user, $passwd, $db);
		if ($connection->connect_errno) {
			return new Response("Errore nella creazione dell'oggetto mysqli!");
		}
		if ($connection->query("
			create table if not exists ex02_user(
    			id INT AUTO_INCREMENT PRIMARY KEY,
    			username VARCHAR(255) NOT NULL UNIQUE,
    			name VARCHAR(255) NOT NULL,
    			email VARCHAR(255) NOT NULL UNIQUE,
    			enable BOOLEAN DEFAULT TRUE,
    			birthdate DATETIME,
    			address LONGTEXT
			);
		") === false)
			return new Response("Errore nella creazione della tabella!");
		return $this->redirectToRoute ("ex02_form");
	}

	#[Route('/ex02/form', name: 'ex02_form')]
    public function form(Request $request, Connection $conn): Response
    {
		$data = new User();
        $form = $this->createForm(InfoFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
			$birth = $data->getBirthdate();
			$birthdate = $birth instanceof DateTime ? $birth->format('Y-m-d H:i:s') : null;
			$sql = 'INSERT IGNORE INTO ex02_user (username, name, email, birthdate, address) VALUES (:username, :name, :email, :birthdate, :address)';
            $conn->executeStatement($sql, [
                'username' => $data->getUsername(),
                'name' => $data->getName(),
                'email' => $data->getEmail(),
				'birthdate' => $birthdate,
				'address' => $data->getAddress(),
            ]);

            $this->addFlash('success', 'User saved!');
            return $this->redirectToRoute('ex02_form');
        }
		$formView = $form->createView();
        $this->addFlash('error', 'Error!');
        return $this->render('info_form/infoForm.html.twig', [
            'form' => $formView,
        ]);
    }

    #[Route('/ex02/show', name: 'ex02_show')]
    public function show(Connection $conn): Response
    {
        $users = $conn->fetchAllAssociative('SELECT * FROM ex02_user');

        return $this->render('ex02/show.html.twig', [
            'users' => $users,
        ]);
    }
}
