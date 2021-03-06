<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaf70d3af48cb580475f2e696efcec5b1
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitaf70d3af48cb580475f2e696efcec5b1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaf70d3af48cb580475f2e696efcec5b1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaf70d3af48cb580475f2e696efcec5b1::$classMap;

        }, null, ClassLoader::class);
    }
}
