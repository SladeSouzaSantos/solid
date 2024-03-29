<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit53adfff4610a3ff4a410192d5f540100
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit53adfff4610a3ff4a410192d5f540100::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit53adfff4610a3ff4a410192d5f540100::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit53adfff4610a3ff4a410192d5f540100::$classMap;

        }, null, ClassLoader::class);
    }
}
