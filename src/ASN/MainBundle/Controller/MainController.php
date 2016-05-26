<?php

namespace ASN\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Application\Sonata\UserBundle\Entity\User;
use Application\Sonata\UserBundle\Form\UserType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\HttpFoundation\JsonResponse;

class MainController extends Controller {

    public function indexAction() {
        $user = $this->getUser();
        if ($user == null) {
            return $this->redirect($this->generateUrl('asn_login'));
        }
        return $this->render('ASNMainBundle:user:home.html.twig');
    }

    public function loginAction() {
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('asn_home'));
        }

        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            $em = $this->getDoctrine()->getManager();
            $tamponUser = $em->getRepository("ApplicationSonataUserBundle:User")->findBy(
                array('email' => $user->getEmail())
            );
            if ($tamponUser != null) {
                $factory = $this->get('security.encoder_factory');
                $encodedPassword = $factory->getEncoder($tamponUser[0])->encodePassword($user->getPassword(), $tamponUser[0]->getSalt());
                $user->setPassword($encodedPassword);
            }

            $currentUser = $em->getRepository("ApplicationSonataUserBundle:User")->findBy(
                array('email' => $user->getEmail(), 'password' => $user->getPassword())
            );

            if ($currentUser != null) {
                $token = new UsernamePasswordToken($currentUser[0], $currentUser[0]->getPassword(), "secured_page", $currentUser[0]->getRoles());
                $this->container->get("security.context")->setToken($token);
                //create session
                $request->getSession()->set('security_secured_area', serialize($token));
                //now dispatch the login event
                $event = new InteractiveLoginEvent($request, $token);
                $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);

                return $this->redirect($this->generateUrl('asn_home'));
            } else {
                $error = "Bad credantials !";
                return $this->render('ASNMainBundle:user:login.html.twig', array(
                    'form' => $form->createView(),
                    'error' => $error
                ));
            }
        }

        return $this->render('ASNMainBundle:user:login.html.twig', array(
            'form' => $form->createView(),
            'error' => ""
        ));
    }

    public function logoutAction() {
        $this->container->get("security.context")->setToken(null);
        return $this->redirect($this->generateUrl('asn_login'));
    }

    public function registerAction() {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            $username = trim($user->getFirstname()."-".$user->getEmail());
            $user->setUsername($username);
            $user->setUsernameCanonical($username);
            $user->setEmailCanonical(trim($user->getEmail()));
            $user->setPlainPassword($user->getPassword());
            $user->setEnabled(true);
            $user->setLocked(false);
            $user->setExpired(false);
            $arrayRoles = array('ROLE_USER');
            $user->setRoles($arrayRoles);
            $user->setCredentialsExpired(false);
            $user->setCreatedAt(new \DateTime);
            $user->setUpdatedAt(new \DateTime);

            var_dump($user);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $currentUser = $em->getRepository("ApplicationSonataUserBundle:User")->findByEmail($user->getEmail());
            var_dump($currentUser[0]);

            $token = new UsernamePasswordToken($currentUser[0], $currentUser[0]->getPassword(), "secured_page", $currentUser[0]->getRoles());
            $this->container->get("security.context")->setToken($token);
            //create session
            $request->getSession()->set('security_secured_area', serialize($token));
            //now dispatch the login event
            $event = new InteractiveLoginEvent($request, $token);
            $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);

            return $this->redirect($this->generateUrl('asn_home'));
            //if ($form->isValid()) {}
        }
        return $this->render('ASNMainBundle:user:register.html.twig', array('form' => $form->createView()));
    }

    public function user_by_emailAction($email) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("ApplicationSonataUserBundle:User")->findByEmail($email);

        if ($user) {
            $res = true;
        } else {
            $res = false;
        }

        $response = new JsonResponse();
        return $response->setData(array("response" => $res));
    }
}
