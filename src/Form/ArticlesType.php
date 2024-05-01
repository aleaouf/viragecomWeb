<?php

namespace App\Form;

use App\Entity\Articles;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
class ArticlesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('description',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('prix',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false, // This option allows you to handle the file upload manually
                'required' => false, // Set to false if you want the file input to be optional
                'attr' => [
                    'class' => 'form-control form-control-sm', // Apply Bootstrap's form-control-file class for file input
                  
                ],
            ])
            ->add('contact',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
            ->add('quantite',TextType::class,[
                'attr' => [
                    'class' => 'form-control',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Articles::class,
        ]);
    }
}
