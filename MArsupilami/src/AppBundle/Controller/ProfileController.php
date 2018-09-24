<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends Controller
{
    /**
     * @Route("/marsupilami/{id}", name="Marsupilami_Profile")
     */
     public function showAction(Request $request, $id)
     {
       $getDoctrine = $this->getDoctrine()->getManager();

       $user = $getDoctrine->getRepository('AppBundle:User')->find($id);

     return $this->render('profile/profile.html.twig', array(
       'username' => $user->getUsername(),
       'age' => $user->getAge(),
       'race' => $user->getRace(),
       'famille' => $user->getFamille(),
       'nourriture' => $user->getNourriture(),
       'gender' => $user->getGender()
     ));
   }

}
