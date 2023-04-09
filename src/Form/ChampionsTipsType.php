<?php

namespace App\Form;

use App\Entity\Champions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class ChampionsTipsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom', TextType::class, [
                'label' => 'Nom du champion',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => 3,
                    'maxlength' => 30,
                    'placeholder' => 'Nom du champion'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner un nom de champion',
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Le nom du champion doit faire au minimum {{ limit }} caractères',
                        'max' => 30,
                        'maxMessage' => 'Le nom du champion doit faire au maximum {{ limit }} caractères',
                    ]),
                ]
            ]) // Voici la parenthèse fermante manquante
            ->add('tips', TextType::class, [
                'label' => 'Tips du champion',
                'label_attr' => [
                    'class' => 'form-label mt-4'
                ],
                'attr' => [
                    'class' => 'form-control',
                    'minlength' => 3,
                    'maxlength' => 5000,
                    'placeholder' => 'Tips du champion'
                ],
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez renseigner un tips de champion',
                    ]),
                    new Assert\Length([
                        'min' => 3,
                        'minMessage' => 'Le tips du champion doit faire au minimum {{ limit }} caractères',
                        'max' => 5000,
                        'maxMessage' => 'Le tips du champion doit faire au maximum {{ limit }} caractères',
                    ]),
                ]
            ])
            ->add('type', ChoiceType::class, [
                'label' => 'Type de champion',
                'choices' => [
                    'Mage' => 'Mage',
                    'Marksman' => 'Marksman',
                    'Fighter' => 'Fighter',
                    'Tank' => 'Tank',
                    'Assassin' => 'Assassin',
                    'Support' => 'Support',
                ],
                'attr' => [
                    'class' => 'form-select'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Ajouter un champion',
                'attr' => [
                    'class' => 'btn btn-primary mt-4'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Champions::class,
        ]);
    }
}
