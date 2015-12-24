<?php
/**
 * bundle 内部载入 service 配置
 */
namespace Hyperbolaa\UeditorBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Hyperbolaa\UeditorBundle\DependencyInjection\HyperbolaaUeditorExtension;

/**
 * Class HyperbolaaUeditorBundle
 * @package Hyperbolaa\Ueditor
 */
class HyperbolaaUeditorBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new HyperbolaaUeditorExtension();
        }

        return $this->extension;
    }
}
