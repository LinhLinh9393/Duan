<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23684cf5b4d877cdce995c2f4547048a
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23684cf5b4d877cdce995c2f4547048a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23684cf5b4d877cdce995c2f4547048a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit23684cf5b4d877cdce995c2f4547048a::$classMap;

        }, null, ClassLoader::class);
    }
}
