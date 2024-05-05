<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Evenement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Utilisateur;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombreplace')
            ->add('id_event', EntityType::class, [
                'label' => 'Choisir l événement',

                'class' => Evenement::class,
                'choice_label' => 'nom_event',
                'constraints' => [
                    new Callback([
                        'callback' => [$this, 'validateCapacity'],
                        'payload' => $options,
                    ]),
                ],
            ])
            
            ->add('nom_user', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'The user name should contain only letters.',
                    ]),
                ],
            ])
            ->add('prenom_user', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Regex([
                        'pattern' => '/^[a-zA-Z]+$/',
                        'message' => 'The user surname should contain only letters.',
                    ]),
                ],
            ])
            ->add('age', IntegerType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Range([
                        'min' => 16,
                        'minMessage' => 'The user must be at least {{ limit }} years old.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }

    public function validateCapacity($value, ExecutionContextInterface $context): void // Corrected type hint
    {
        $form = $context->getRoot();
        $reservation = $form->getData();
        $evenement = $reservation->getIdEvent();

        if ($evenement->getCapacite() < $reservation->getNombreplace()) {
            $context->buildViolation('The reservation exceeds the capacity of the event.')
                ->atPath('nombreplace')
                ->addViolation();
        }
    }
}
