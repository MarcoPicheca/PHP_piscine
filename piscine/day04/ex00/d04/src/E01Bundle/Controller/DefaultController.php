<?php

namespace E01Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    private $categories = [
        'controller', 'routing', 'templating', 'doctrine',
        'testing', 'validation', 'forms', 'security',
        'cache', 'translations', 'services'
    ];

    /**
     * @Route("/e01", name="e01_home")
     */
    public function indexAction()
    {
        return $this->render('E01Bundle:Default:index.html.twig', [
            'categories' => $this->categories
        ]);
    }

    /**
     * @Route("/e01/{category}", name="e01_category")
     */
    public function categoryAction($category)
    {
        if (!in_array($category, $this->categories)) {
            return $this->redirectToRoute('e01_home');
        }

        return $this->render('E01Bundle:Cheatsheet:' . $category . '.html.twig');
    }
}
