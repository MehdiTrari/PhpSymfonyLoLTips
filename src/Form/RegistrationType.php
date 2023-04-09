<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use Symfony\Component\Validator\Constraints as Assert;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Votre nom',
                    'class' => 'form-control',
                    'minlength' => 2,
                    'maxlength' => 50
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez entrer votre nom'
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre nom doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre nom doit faire au plus {{ limit }} caractères'
                    ]),
                ]
            ])
            ->add('pseudo', TextType::class, [
                'label' => 'Pseudo',
                'attr' => [
                    'placeholder' => 'Votre pseudo',
                    'class' => 'form-control',
                    'minlength' => 2,
                    'maxlength' => 50
                ],
                'constraints' => [
                    
                    new Assert\Length([
                        'min' => 2,
                        'max' => 50,
                        'minMessage' => 'Votre pseudo doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre pseudo doit faire au plus {{ limit }} caractères'
                    ]),
                ]
            ])
                
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Votre email',
                    'class' => 'form-control',
                    'minlength' => 2,
                    'maxlength' => 180
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez entrer votre email'
                    ]),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 180,
                        'minMessage' => 'Votre email doit faire au moins {{ limit }} caractères',
                        'maxMessage' => 'Votre email doit faire au plus {{ limit }} caractères'
                    ]),
                    new Assert\Email([
                        'message' => 'Veuillez entrer un email valide'
                    ])
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                'first_options' => [
                    'label' => 'Mot de passe',
                ],
                'second_options' => [
                    'label' => 'Confirmer le mot de passe',
                ],
                'invalid_message' => 'Les mots de passe ne correspondent pas',
            ]) 

            ->add('submit', SubmitType::class, [
                'label' => 'S\'inscrire',
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
