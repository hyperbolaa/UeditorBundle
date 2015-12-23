<?php
/**
 * 第三方bundle的服务
 * 此处写业务逻辑
 */
namespace Hyperbolaa\Ueditor\Service;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class UeditorService
 * @package Hyperbolaa\Ueditor\Service
 */
class UeditorService implements ContainerAwareInterface
{

    private $container;
    private $findBestMask;
    private $findFromRandom;
    private $author;

    /**
     * Sets the container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     */
    public function setContainer(ContainerInterface $container = null)
    {
        // TODO: Implement setContainer() method.
        $this->container = $container;
    }


    /**
     * 测试返回数据
     * @return string
     */
    public function getName()
    {
        return "yuchong";
    }


    /**
     * 获取服务变量
     */
    public function getVar(){
        $options = $this->container->getParameter('hyperbolaa_ueditor');
        $this->author = $options['author'];
        return $this->author;
    }


    /**
     * @return mixed
     */
    public function findBestMask(){
        $options = $this->container->getParameter('hyperbolaa_ueditor');
        $this->findBestMask = $options['find_best_mask'];
        return $this->author;
    }


    /**
     * @return mixed
     */
    public function findFromRandom(){
        $options = $this->container->getParameter('hyperbolaa_ueditor');
        $this->findFromRandom = $options['find_from_random'];
        return $this->author;
    }




}
