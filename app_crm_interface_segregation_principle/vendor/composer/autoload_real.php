<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5a8d629b76cff02f10240858aa7b52ba
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit5a8d629b76cff02f10240858aa7b52ba', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5a8d629b76cff02f10240858aa7b52ba', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5a8d629b76cff02f10240858aa7b52ba::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
