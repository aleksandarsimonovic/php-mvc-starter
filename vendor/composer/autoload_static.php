<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcf40c40dae7a3ef9a5fd35cc259b7fc6
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'App\\Config\\DbConfig' => __DIR__ . '/../..' . '/config/DbConfig.php',
        'App\\Controller\\BaseController' => __DIR__ . '/../..' . '/controller/BaseController.php',
        'App\\Controller\\IndexController' => __DIR__ . '/../..' . '/controller/IndexController.php',
        'App\\Db\\Database' => __DIR__ . '/../..' . '/db/Database.php',
        'App\\Db\\DatabaseConfig' => __DIR__ . '/../..' . '/db/DatabaseConfig.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcf40c40dae7a3ef9a5fd35cc259b7fc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcf40c40dae7a3ef9a5fd35cc259b7fc6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcf40c40dae7a3ef9a5fd35cc259b7fc6::$classMap;

        }, null, ClassLoader::class);
    }
}
