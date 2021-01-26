<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43a7e7d96fb77de9f6dd165c24456b9c
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit43a7e7d96fb77de9f6dd165c24456b9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43a7e7d96fb77de9f6dd165c24456b9c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
