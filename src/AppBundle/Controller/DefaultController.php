<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ));
    }
        /**
         * @Route("/mail", name="mail")
         */
        public function mailAction(Request $request)
        {
            $mailer = $this->get('mailer');

            try{
                $message = \Swift_Message::newInstance()
                    ->setFrom('maciorqus@gmail.com')
                    ->setTo('m.michalak@itkontrakt.com.pl')
                    ->setSubject('Raport portfela')
                    ->setBody('W załączniku znajduje się raport portfela akwizycujnego wg doradców');

                $mailer->send($message);
            }catch (Exception $e) {
                vardump($e);
            }
            return new Response('OK');
        }
}
