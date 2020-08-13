<?php

namespace App\Form\Admin;

use App\Entity\Admin\Messages;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class MessagesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('subject')
            ->add('message')
            ->add('status', ChoiceType::class, [
                'choices' => [
                    'Readed' => 'Readed',
                    'New' => 'New',
                    'Answered' => 'Answered'
                ],
            ])
            ->add('ip')
            ->add('note')
            ->add('email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Messages::class,
        ]);
    }
}