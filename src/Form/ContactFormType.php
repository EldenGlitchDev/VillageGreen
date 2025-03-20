<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email')
            //->add('roles')
            //->add('password')
            ->add('nomUtil')
            ->add('prenomUtil')
            //->add('siren')
            ->add('numTelUtil')
            //->add('typeUtil')
            //->add('promoUtil')
            ->add('adrVoiePostUtil')
            //->add('adrCodePostUtil')
            //->add('adrVilleUtil')
            //->add('adrPaysUtil')
            ->add('societe')
            ->add('sujet')
            ->add('message', TextareaType::class, [
                'label' => 'Message',
                'required' => true
                ]
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
