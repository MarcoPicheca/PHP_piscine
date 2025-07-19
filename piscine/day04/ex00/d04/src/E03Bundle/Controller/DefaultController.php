<?php

namespace E03Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
	/**
	 * @Route("/", name="e03_home")
	 */
	public function indexAction()
	{
		$number_of_colors = $this->getParameter('e03.number_of_colors');
		$colors = [];
		foreach ( ['black', 'red', 'blue', 'green'] as $color) {
		    $shades = [];
		    for ($i = 0; $i < $number_of_colors; $i++) {
		        $opacity = round(($i + 1) / $number_of_colors, 2);
		        $shades[] = $opacity;
		    }
		    $colors[] = [
		        'name' => $color,
		        'shades' => $shades
		    ];
		}
		// end
		return $this->render('E03Bundle:Default:index.html.twig', [
			'colors' => $colors,
			'numberOfShades' => $number_of_colors
		]);
	}
}
