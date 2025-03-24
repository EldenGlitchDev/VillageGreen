<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomContact', TextType::class, [
                'label' => 'Nom',
                'required' => true,
            ])
            ->add('prenomContact', TextType::class, [
                'label' => 'Prénom',
            ])
            ->add('mailContact', TextType::class, [
                'label' => 'Adresse mail',
                'required' => true,
            ])
            ->add('sujetContact', TextareaType::class, [
                'label' => 'Sujet',
                'required' => true,
            ])
            ->add('messageContact', TextareaType::class, [
                'label' => 'Message',
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
