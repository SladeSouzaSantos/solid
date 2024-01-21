<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c49fa62d2c84f22f97b7806529e2b8e
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
        'App\\CarrinhoCompra' => __DIR__ . '/../..' . '/src/CarrinhoCompra.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c49fa62d2c84f22f97b7806529e2b8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c49fa62d2c84f22f97b7806529e2b8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c49fa62d2c84f22f97b7806529e2b8e::$classMap;

        }, null, ClassLoader::class);
    }
}