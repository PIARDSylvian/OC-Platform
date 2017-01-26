<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CoreController extends Controller
{
    public function indexAction()
    {
        // ici on recupere les 3 derniere annonces via une requete
        // Vu que l'on ne sait pas encore le faire nous allons les écrire en dur

        $listAdverts = array(
            array(
                'title'   => 'Recherche développpeur Symfony2',
                'id'      => 1,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
                'date'    => new \Datetime()
            ),
            array(
                'title'   => 'Mission de webmaster',
                'id'      => 2,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
                'date'    => new \Datetime()
            ),array(
                'title'   => 'Offre de stage webdesigner',
                'id'      => 3,
                'author'  => 'Alexandre',
                'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
                'date'    => new \Datetime()
            )
        );

        return $this->render('CoreBundle:Core:index.html.twig', array( 'listAdverts'=>$listAdverts ));
    }
    public function contactAction(Request $request)
    {
        $request->getSession()->getFlashBag()->add('notice', 'La page de contact n\'est pas encore disponible, merci de revenir plus tard.');

        return $this->redirectToRoute('core_homepage');
    }
}
