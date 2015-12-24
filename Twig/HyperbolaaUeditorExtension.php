<?php
/**
 * 注册twig模板的 函数 和  过滤器
 */
namespace Hyperbolaa\UeditorBundle\Twig;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class HyperbolaaUeditorExtension
 * @package Hyperbolaa\Ueditor\Twig
 */
class HyperbolaaUeditorExtension extends \Twig_Extension implements ContainerAwareInterface
{
    /**
     * {@inheritdoc}
     */
    protected $container;

    /**
     * {@inheritdoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('hyperbolaa_ueditor', array($this, 'hyperbolaaUeditorFilter')),
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('hyperbolaa_ueditor', array($this, 'hyperbolaaUeditorFunction')),
        );
    }
    
    /**
     * Get the URL for the QRCode with the specified text, format and size
     *
     * @param string $text
     * @return string The URL for the QRCode
     */
    public function hyperbolaaUeditorFilter($text = '')
    {
        return $this->generateUrl($text);
    }

    
    /**
     * Get the URL for the QRCode with the specified text, format and size
     *
     * @param string $text
     * @return string The URL for the QRCode
     */
    public function hyperbolaaUeditorFunction($text = '')
    {
        return $this->generateUrl($text);
    }

    /**
     * 走路由过程
     * @param string $text
     * @return mixed
     */
    private function generateUrl($text = '')
    {
        $options = $this->container->getParameter('hyperbolaa_ueditor');
        $isAbsoluteUrl = $options['absolute_url'];
        $router = $this->container->get('router');
        $url = $router->generate(
            'hyperbolaa_ueditor',
            array('text' => $text),
            $isAbsoluteUrl
        );
        return $url;
    }

    
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'hyperbolaa_ueditor_extension';
    }
}
