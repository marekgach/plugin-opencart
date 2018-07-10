<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8acf5783e71989b75332b7e66756b99
{
    public static $classMap = array (
        'Smartlook\\Webapi\\Client' => __DIR__ . '/..' . '/smartlook/webapi/src/Webapi/Client.php',
        'Smartlook\\Webapi\\WebapiExtension' => __DIR__ . '/..' . '/smartlook/webapi/src/Webapi/WebapiExtension.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf8acf5783e71989b75332b7e66756b99::$classMap;

        }, null, ClassLoader::class);
    }
}