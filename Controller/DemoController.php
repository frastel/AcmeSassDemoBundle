<?php

namespace Acme\SassDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoController extends Controller
{
    /**
     * @Route("/demo/sass", name="_demo_sass")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
