<?php

namespace App\Form;

use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Espacepartenaire;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\TextType; // Add this line
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Validator\Constraints\GreaterThan;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
             // Replace 'id_espace' field with EntityType
             ->add('id_espace', EntityType::class, [
                'class' => Espacepartenaire::class,
                'choice_label' => 'nom', // Adjust to the property of Espacepartenaire you want to display
                'query_builder' => function ($er) {
                    return $er->createQueryBuilder('e')
                        ->where('e.accepted = true'); // Filter for accepted Espacepartenaires
                },
            ])
            ->add('nom_event')
            ->add('dateEvent', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern' => '/^\d{2}\/\d{2}\/\d{4}$/',
                        'message' => 'The date must be in the format dd/mm/yyyy.',
                    ]),
                    new GreaterThan([
                        'value' => date('d/m/Y'),
                        'message' => 'The event date must be greater than or equal to the current date.',
                    ]),
                ],
            ])
            
            ->add('capacite', IntegerType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Range([
                        'min' => 5,
                        'minMessage' => 'The capacity must be at least {{ limit }} persones.',
                    ]),
                ],
            ])
            ->add('description', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern' => '/^[a-zA-Z\'\.\s]+$/',
                        'message' => 'The description should contain only letters.',
                    ]),
                ],
            ])
            
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
