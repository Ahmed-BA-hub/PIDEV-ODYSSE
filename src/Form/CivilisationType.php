<?php

namespace App\Form;

use App\Entity\Civilisation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class CivilisationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null,[
                'label' => false,
                
            ])
            ->add('description', null, [
                'label' => false,
                // autres options
            ])
            ->add('emplacement', null, [
                'label' => false,
                // autres options
            ])

            ->add('imageFile', FileType::class, [
                'label' => 'Image (JPEG or PNG file)',
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Civilisation::class,
        ]);
    }
}


