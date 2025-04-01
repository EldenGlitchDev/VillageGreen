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
                'attr' => ['class' => 'form-control rounded-pill col-8'],
            ])
            ->add('prenomContact', TextType::class, [
                'label' => 'Prénom',
                'attr' => ['class' => 'form-control rounded-pill col-8'],
            ])
            ->add('mailContact', TextType::class, [
                'label' => 'Adresse mail',
                'required' => true,
                'attr' => ['class' => 'form-control rounded-pill col-8'],
            ])
            ->add('sujetContact', TextareaType::class, [
                'label' => 'Sujet',
                'required' => true,
                'attr' => ['class' => 'form-control rounded-pill col-8'],
            ])
            ->add('messageContact', TextareaType::class, [
                'label' => 'Message',
                'required' => true,
                'attr' => ['class' => 'form-control rounded-pill col-8'],
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
