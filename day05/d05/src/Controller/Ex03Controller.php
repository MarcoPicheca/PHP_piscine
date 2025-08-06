<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Form\InfoFormOrmType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;

final class Ex03Controller extends AbstractController
{
	#[Route ("/", name:"day05_home")]
	public function indexAction()
	{
		return $this->render("home.html.twig");
	}

	#[Route ("/ex03", name:"ex03")]
	public function indexEx02()
	{
		return $this->redirectToRoute("ex03_create_table03");
	}

	
	#[Route(path:"/ex03/create_table03", name:"ex03_create_table03")]
	public function InfoForm(Request $request, EntityManagerInterface $em)
	{
        $user = new User();
        $form = $this->createForm(InfoFormOrmType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            $user = $form->getData();
            $info = $em->getRepository(User::class)->findOneBy(
                [
                    'username' => $user->getUsername(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                ]
                );
            if ($info){
                return new Response("Username already exist!");
            }
            $em->persist($user);
            $this->addFlash('success', 'Success!');
            $em->flush();
            return $this->render("ex03/index.html.twig", [
                'form' => $form->createView(),
            ]);
        }

        $this->addFlash('error', 'Error!');
        $em->flush();
        return $this->render("ex03/index.html.twig", [
            'form' => $form->createView(),
        ]);
    }
}
