<?php

namespace E02Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\NotBlank;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="e02_home")
     */
    public function indexAction(Request $request)
    {
        $form = $this->createFormBuilder([
            'message' => '',
            'include_timestamp' => 'Yes'
        ])
            ->add('message', TextType::class, [
                'constraints' => new NotBlank(['message' => 'Message should not be blank']),
            ])
            ->add('include_timestamp', ChoiceType::class, [
                'choices' => [
                    'Yes' => 'Yes',
                    'No' => 'No'
                ],
                'expanded' => false,
                'multiple' => false
            ])
            ->add('save', SubmitType::class, ['label' => 'Submit'])
            ->getForm();

        $form->handleRequest($request);
        $lastLine = null;
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $message = $data['message'];
            $timestamp = ($data['include_timestamp'] === 'Yes') ? date('Y-m-d H:i:s') : '';
            $line = $timestamp ? "$message - $timestamp" : $message;

            // Path del file da parameters.yml
            $filePath = $this->getParameter('notes_file');
            $absolutePath = $this->get('kernel')->getRootDir() . '/../' . $filePath;

            // Scrivi su file
            file_put_contents($absolutePath, $line . PHP_EOL, FILE_APPEND);

            $lastLine = $line;
        }

        return $this->render('E02Bundle:Default:index.html.twig', [
            'form' => $form->createView(),
            'last_line' => $lastLine
        ]);
    }
}
