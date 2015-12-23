<?php
/**
 * bundle 内部载入 service 配置
 */
namespace Hyperbolaa\Ueditor;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Hyperbolaa\Ueditor\DependencyInjection\HyperbolaaUeditorExtension;

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
