<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInited2f7736cb87660cba9f9e351529e2c4
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInited2f7736cb87660cba9f9e351529e2c4::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
