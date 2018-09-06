<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 1/08/18
 * Time: 20:51
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class DefaultController
 * @package App\Controller
 */
class DefaultController
{

    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {
        return new Response('Accueil - Hiiiiiii');
    }
}