<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit29aee13f57ba92d3138989a6a89e1d73
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'j' => 
        array (
            'johnpbloch\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/johnpbloch/wordpress-core-installer/src',
            ),
        ),
        'W' => 
        array (
            'WPLib_' => 
            array (
                0 => __DIR__ . '/..' . '/wplib/wplib/includes',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit29aee13f57ba92d3138989a6a89e1d73::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit29aee13f57ba92d3138989a6a89e1d73::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit29aee13f57ba92d3138989a6a89e1d73::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}