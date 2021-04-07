<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class SelectPlayerAction
{
    public function __invoke(Environment $twig) : Response
    {
        return new Response($twig->render('select_player.html.twig'));
    }
}