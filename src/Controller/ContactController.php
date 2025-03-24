<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Attribute\Route;

final class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, EntityManagerInterface $entity_manager_interface, MailerInterface $mailer_interface): Response
    {

        $contact = new Contact();

        $form = $this->createForm(ContactFormType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $entity_manager_interface->persist($contact);
            $entity_manager_interface->flush();

            $email = (new Email())
            ->from('villagegreen@laposte.fr')
            ->to('exemple@ex.com')
            ->subject('Confirmation de contact')
            ->text('Bonjour !
                Nous avons bien reçu votre mail. Nous allons examiner votre demande et nous vous contacterons dans les plus brefs délais.
                Cordialement,
                l\'équipe VillageGreen.');

            try{
                $mailer_interface->send($email);
            } catch (TransportExceptionInterface $e) {
                return $this->redirectToRoute('app_index');
            }
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form
        ]);
    }
}
