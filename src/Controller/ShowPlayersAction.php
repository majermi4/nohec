<?php
declare(strict_types=1);

namespace App\Controller;

use App\Entity\Player;
use App\Form\AddPlayerForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ShowPlayersAction extends AbstractController
{
    public function __invoke(Request $request) : Response
    {
        $addPlayerForm = $this->createForm(AddPlayerForm::class);
        $addPlayerForm->handleRequest($request);

        if ($addPlayerForm->isSubmitted() && $addPlayerForm->isValid()) {

            $playerName = $addPlayerForm->get('name')->getNormData();
            $player = new Player($playerName);

            $this->getDoctrine()->getManager()->persist($player);
            $this->getDoctrine()->getManager()->flush();
        }

        $playersRepository = $this->getDoctrine()->getRepository(Player::class);
        $players = $playersRepository->findAll();

        return $this->render(
            'show_player.html.twig',
            [
                'players' => $players,
                'addPlayerForm' => $addPlayerForm->createView(),
            ],
        );
    }
}