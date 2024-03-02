<?php

namespace App\Form;

use App\Entity\Programe;
use App\Entity\ReservationProgramme;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReservationProgrammeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('date',DateType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Email',
                    ]
            ])
            ->add('nbpersonne',IntegerType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Nombre de personne',
                    ]
            ])
            ->add('heure',IntegerType::class,[
                'attr' => ['class' => 'form-control' , 'placeholder' => 'Heure',
                    ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ReservationProgramme::class,
        ]);
    }
}
