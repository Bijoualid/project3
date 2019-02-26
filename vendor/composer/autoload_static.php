<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39c0c05ae6b564d5baa568ff7e9ab4eb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Models\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
    );

    public static $classMap = array (
        'Models\\entities\\Comment' => __DIR__ . '/../..' . '/models/entities/Comment.php',
        'Models\\entities\\Post' => __DIR__ . '/../..' . '/models/entities/Post.php',
        'Models\\entities\\User' => __DIR__ . '/../..' . '/models/entities/User.php',
        'Models\\manager\\Manager' => __DIR__ . '/../..' . '/models/manager/Manager.php',
        'Models\\manager\\ManagerComment' => __DIR__ . '/../..' . '/models/manager/ManagerComment.php',
        'Models\\manager\\ManagerPost' => __DIR__ . '/../..' . '/models/manager/ManagerPost.php',
        'Models\\manager\\ManagerUser' => __DIR__ . '/../..' . '/models/manager/ManagerUser.php',
        'Models\\manager\\iManager' => __DIR__ . '/../..' . '/models/manager/iManager.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39c0c05ae6b564d5baa568ff7e9ab4eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39c0c05ae6b564d5baa568ff7e9ab4eb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39c0c05ae6b564d5baa568ff7e9ab4eb::$classMap;

        }, null, ClassLoader::class);
    }
}
