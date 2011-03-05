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
     * @extra:Template
     */
    public function listAction()
    {
    }
}