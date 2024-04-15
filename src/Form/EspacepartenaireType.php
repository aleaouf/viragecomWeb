<?php

namespace App\Form;

use App\Entity\Espacepartenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EspacepartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('localisation')
            ->add('type', ChoiceType::class, [
                'label' => 'Type',
                'choices' => [
                    'Salon de thé' => 'Salon de thé',
                    'Restaurant' => 'Restaurant',
                    'Resto Bar' => 'Resto Bar',
                    'Espace ouvert' => 'Espace ouvert',
                    'Cafeteria' => 'Cafeteria',
                    'Terrain Foot' => 'Terrain Foot',
                    'Salle de jeux' => 'Salle de jeux',
                    'Café Lounge' => 'Café Lounge',
                ],
                // Optional: Render as a select dropdown
                'expanded' => false,
                'multiple' => false,
            ])
            // Use FileType for file uploads
            ->add('photos', FileType::class, [
                'label' => 'Image (JPG, PNG, JPEG)',
                'mapped' => false,
                'required' => false,
            ])
            
            ->add('description');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Espacepartenaire::class,
        ]);
    }
}
