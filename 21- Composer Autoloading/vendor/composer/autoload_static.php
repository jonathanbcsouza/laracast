<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit735f00a69c33825445534b95c62ec089
{
    public static $classMap = array (
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'Request' => __DIR__ . '/../..' . '/core/RequestClass.php',
        'Router' => __DIR__ . '/../..' . '/core/RouterClass.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit735f00a69c33825445534b95c62ec089::$classMap;

        }, null, ClassLoader::class);
    }
}