<?php
// src/AppBundle/Form/RegistrationType.php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\NotBlank;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('Age', IntegerType::class)
        ->add('Famille', TextType::class, array(
            'label' => 'Quel est votre famille',
            'constraints' => [
                  new NotBlank([
                      'message' => 'Veuillez remplir le champ'
                  ]),
              ]
        ))
        ->add('Race', TextType::class, array(
            'label' => 'Quel est votre race',
            'constraints' => [
                  new NotBlank([
                      'message' => 'Veuillez remplir le champ'
                  ]),
              ]
        ))
        ->add('Nourriture', TextType::class, array(
            'label' => 'Votre nourriture favorite',
            'constraints' => [
                  new NotBlank([
                      'message' => 'Veuillez remplir le champ'
                  ]),
              ]
        ))
        ->add('Gender', ChoiceType::class, array(
          'label' => 'Votre Sexe',
          'choices'  => array(
              'Homme' => 'Homme',
              'Femme' => 'Femme',
              'Autres' => 'Autres',
          ),
      ));
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';

        // Or for Symfony < 2.8
        // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
