<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb4ff92ae86c34db9b4f766e4e71f2725
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

        spl_autoload_register(array('ComposerAutoloaderInitb4ff92ae86c34db9b4f766e4e71f2725', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb4ff92ae86c34db9b4f766e4e71f2725', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb4ff92ae86c34db9b4f766e4e71f2725::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
