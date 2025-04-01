<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MentionsLegPolConfController extends AbstractController
{
    #[Route('/mentions/leg', name: 'app_mentions_leg')]
    public function MentionsLeg(): Response
    {
        return $this->render('mentions_leg_pol_conf/index.html.twig', [
            'controller_name' => 'MentionsLegPolConfController',
        ]);
    }

    #[Route('/pol/conf', name: 'app_politique_conf')]
    public function PolConf(): Response
    {
        return $this->render('mentions_leg_pol_conf/polConf.html.twig', [
            'controller_name' => 'MentionsLegPolConfController',
        ]);
    }
}
