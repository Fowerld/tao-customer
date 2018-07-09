<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class HomeController
 *
 * @package App\Controller
 */
class HomeController extends Controller
{
    public function index()
    {
        $hello = 'hello';

        return $this->render('demo.html.twig', compact('hello'));
    }
}
