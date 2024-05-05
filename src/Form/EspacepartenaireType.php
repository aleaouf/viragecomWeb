<?php

namespace App\Form;

use App\Entity\Espacepartenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Form\TypeType;
use App\Entity\Type;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EspacepartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('localisation', TextType::class, [
                'label' => 'Localisation'
            ])
            // Use FileType for file uploads
            ->add('photos', FileType::class, [
                'label' => 'Image (JPG, PNG, JPEG)',
                'mapped' => false,
                'required' => false,
            ])
            
            ->add('description', TextType::class, [ // Use TextareaType for multiline text
                'label' => 'Description',
                'attr' => [
                    'rows' => 6, // Set initial rows (height) of the textarea
                    'style' => 'resize: vertical;', // Allow vertical resizing
                ]
            ])            
            ->add('id_type', EntityType::class, [
                'label' => 'Type',
                'class' => Type::class,
                'choice_label' => 'nomType', // Display typenom in the dropdown
                'placeholder' => 'Choose a Type', // Optional placeholder
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Espacepartenaire::class,
        ]);
    }
}
