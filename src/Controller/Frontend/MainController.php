<?php 

namespace App\Controller\Frontend;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 *  Class main controller pour la page d'accueil
 */
class MainController extends AbstractController
{

    /**
     *  Affiche la page d'accueil
     *  @Route("/",name="home")
     *  @return Response
     * 
     */
    public function index(): Response
    {
        $data = ["Natha","Emma"];
        return $this->render('Home/index.html.twig', ['data' => $data]);
    }
}

?>