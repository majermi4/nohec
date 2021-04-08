<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class IndexAction
{
    public function __invoke(Environment $twig) : Response
    {
        return new Response($twig->render('index.html.twig'));
    }
}