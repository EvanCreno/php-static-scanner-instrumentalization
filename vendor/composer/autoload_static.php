<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1fc3794b3df2d1e6bf61592ddadfa994
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpParser\\' => 10,
        ),
        'I' => 
        array (
            'Instrumentalizator\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'Instrumentalizator\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1fc3794b3df2d1e6bf61592ddadfa994::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1fc3794b3df2d1e6bf61592ddadfa994::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
