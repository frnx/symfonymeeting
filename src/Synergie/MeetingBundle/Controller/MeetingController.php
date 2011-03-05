<?php

namespace Synergie\MeetingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @extra:Route("/meeting")
 */
class MeetingController extends Controller
{
    /**
     * @extra:Route("/")
     */
    public function listAction()
    {
        return $this->render('MeetingBundle:Default:list.html.twig');
    }
}