<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Service\BadWordFilter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationType extends AbstractType
{
    private BadWordFilter $badWordFilter;

    public function __construct(BadWordFilter $badWordFilter)
    {
        $this->badWordFilter = $badWordFilter;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Espace' => 'Espace',
                    'Marketplace' => 'Marketplace',
                    'Evenement' => 'Evenement',
                ]    // Add more options as needed, such as required, multiple selection, etc.
            ])
            ->add('contenu', TextareaType::class, [
                'attr' => ['class' => 'autoresize'],
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
