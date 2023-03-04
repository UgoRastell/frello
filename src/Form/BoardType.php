<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Board;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BoardType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('libelle')
            ->add('background')
            ->add('user', EntityType::class, [
                'class' => User::class,
                'mapped' => true,
                'choice_label' => 'email',
                'multiple' => true,
                'expanded' => false,
                'choices' => $options['users'], // inject users as choices
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Board::class,
            'users' => [], // define the users option
        ]);
    }
}
