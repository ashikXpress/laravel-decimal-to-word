<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit835663d00f36348e021c198e4cbe32d7
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ashik\\DecimalToWord\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ashik\\DecimalToWord\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit835663d00f36348e021c198e4cbe32d7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit835663d00f36348e021c198e4cbe32d7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit835663d00f36348e021c198e4cbe32d7::$classMap;

        }, null, ClassLoader::class);
    }
}