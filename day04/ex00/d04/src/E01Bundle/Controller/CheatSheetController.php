<?php

namespace E01Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CheatSheetController extends Controller
{
    /**
     * @Route ("", name="e01_index")
     */
    public function indexAction()
    {
        $categories = ["controller", "routing", "templating",
            "doctrine", "testing", "validation", "forms", "security", "cache", "translations", "services"];
        return $this->render('E01Bundle::index.html.twig', ['categories' => $categories]);
    }
    
    /**
     * @Route("{category}", name="e01_show")
     */
    public function showAction($category)
    {
        $categories = [
            'controller', 'routing', 'templating', 'doctrine',
            'testing', 'validation', 'forms', 'security',
            'cache', 'translations', 'services'
        ];
        if (!in_array($category, $categories)) {
            return $this->redirectToRoute('e01_index');
        }
        return $this->render('E01Bundle:cheatsheets:' . $category . '.html.twig');
    }
    
}