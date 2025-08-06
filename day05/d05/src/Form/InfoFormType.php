<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints as Assert;


class InfoFormType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options): void
	{
		$builder
			->add('name', TextType::class, [
                'constraints' => [
					new Assert\NotBlank(['message'=> 'This fiel can\'t be blank'])
                ]])
            ->add('username', TextType::class, [
                'constraints' => [
					new Assert\NotBlank(['message'=> 'This fiel can\'t be blank'])
                ]])
            ->add('email', EmailType::class, [
                'constraints' => [
					new Assert\NotBlank(['message'=> 'This fiel can\'t be blank'])
                ]])
            ->add('birthdate', DateType::class, [
    	    'widget' => 'single_text',
    	    'html5' => true,
    	    'constraints' => [
				new Assert\NotBlank(['message'=> 'This fiel can\'t be blank'])
    	    ],
    	    'attr' => [
    	        'max' => (new \DateTime('yesterday'))->format('Y-m-d'),
    	    ],
    		])
            ->add('address', TextType::class, [
                'constraints' => [
					new Assert\NotBlank(['message'=> 'This fiel can\'t be blank'])
                ]]);
	}

	public function configureOptions(OptionsResolver $resolver): void
	{
		$resolver->setDefaults([
			'data_class' => User::class,
		]);
	}
}

?>