<?php

namespace Hyperbolaa\UeditorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * Class UeditorController
 * @package Hyperbolaa\Ueditor\Controller
 */
class UeditorController extends Controller
{
    protected $http_max_age;
    protected $https_max_age;

    
    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
        $options = $this->container->getParameter('hyperbolaa_ueditor');
        $this->http_max_age = $options['http_max_age'];
        $this->https_max_age = $options['https_max_age'];
    }
    
    /**
     * @Route( "/ueditor/{text}",name="hyperbolaa_ueditor",requirements={"text" = ".+" })
     * @Method("GET")
     * @param Request $request The Request object
     * @param string $text The text to be converted to a QRCode image
     * @return Response The response with the image
     */
    public function ueditorAction(Request $request, $text = '')
    {

        $format = $request->getRequestFormat();

        $ueditorService = $this->get('hyperbolaa_ueditor');

        $name = $ueditorService->getName();

        $response = new Response($name);

        return $response;
    }
}
