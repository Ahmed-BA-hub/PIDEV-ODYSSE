<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\ReservationHotel;
use App\Entity\ReservationProgramme;
use App\Entity\ReservationRestaurant;
use App\Entity\Resrvation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('description',TextType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Envoie nous votre reclamation',
                    ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
