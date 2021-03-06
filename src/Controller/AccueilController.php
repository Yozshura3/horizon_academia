<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    /** Déclaration de la page d'accueil
     * @Route("/", name="accueil")
     */
    public function accueilController(){
        return $this->render('accueil.html.twig');
    }

    /** Déclaration de la page LoL
    * @Route("/lol", name="lol_accueil")
    */
    public function lolController(){
        return $this->render('lol.html.twig');
    }

    /** Déclaration de la page TemTem
     * @Route("/temtem", name="temtem_accueil")
     */
    public function temtemController(){
         return $this->render('accueil_temtem.html.twig');
     }

    /** Déclaration de la page TemTem
     * @Route("/list-temtem", name="temtem_list")
     */
    public function listTemtemController(){
        return $this->render('list_temtem.html.twig');
    }
}

