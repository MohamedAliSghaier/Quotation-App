<?php

namespace App\Form;

use App\Entity\Paper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class PaperType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name')
            ->add('width')
            ->add('height')
            ->add('weight', ChoiceType::class, [
        'choices' => [
            '80 gsm' => 80,
            '130 gsm' => 135,
            '170 gsm' => 170,
            '250 gsm' => 250,
            '300 gsm' => 300,
            '350 gsm' => 350,
        ],
    ])
            ->add('offsetPricePerSheet')
            ->add('digitalPricePerSheet')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paper::class,
        ]);
    }
}
