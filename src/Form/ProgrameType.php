<?php

namespace App\Form;

use App\Entity\Civilisation;
use App\Entity\Programe;
use Doctrine\DBAL\Types\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ProgrameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', null, [
                'label' => false,
            ])
            ->add('duree', null, [
                'label' => false,
            ])
            ->add('date', null, [
                'label' => false,
            ])
            ->add('civilisation_id', EntityType::class, [
                'class' => Civilisation::class,
                'choice_label' => 'nom',
                'label' => false,
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image (JPEG or PNG file)',
                'required' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Programe::class,
        ]);
    }
}
