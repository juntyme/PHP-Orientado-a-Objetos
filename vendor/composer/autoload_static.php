<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c8591da5603ab39da1250c80ada0dc5
{
    public static $files = array (
        '6b1a3862b29efdab9471a3eca4fe51c5' => __DIR__ . '/../..' . '/helpers/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
        'U' => 
        array (
            'User\\CursoPoo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'User\\CursoPoo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\classes\\Abajur' => __DIR__ . '/../..' . '/app/classes/Abajur.php',
        'app\\classes\\Crud' => __DIR__ . '/../..' . '/app/classes/Crud.php',
        'app\\classes\\Login' => __DIR__ . '/../..' . '/app/classes/Login.php',
        'app\\classes\\Person' => __DIR__ . '/../..' . '/app/classes/Person.php',
        'app\\classes\\Product' => __DIR__ . '/../..' . '/app/classes/Product.php',
        'app\\classes\\Teste' => __DIR__ . '/../..' . '/app/classes/Teste.php',
        'app\\classes\\User' => __DIR__ . '/../..' . '/app/classes/User.php',
        'app\\classes\\book' => __DIR__ . '/../..' . '/app/classes/book.php',
        'app\\models\\Model' => __DIR__ . '/../..' . '/app/models/Model.php',
        'app\\models\\Product' => __DIR__ . '/../..' . '/app/models/Product.php',
        'app\\models\\User' => __DIR__ . '/../..' . '/app/models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c8591da5603ab39da1250c80ada0dc5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c8591da5603ab39da1250c80ada0dc5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c8591da5603ab39da1250c80ada0dc5::$classMap;

        }, null, ClassLoader::class);
    }
}
