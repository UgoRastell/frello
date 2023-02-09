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
                // looks for choices from this entity
                'class' => User::class,
                'mapped' => true,
                // uses the User.username property as the visible option string
                'choice_label' => 'email',
                // used to render a select box, check boxes or radios
                'multiple' => true,
                'expanded' => false,
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Board::class,
        ]);
    }
}
