<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit65c24c08a7a461ad5b7ac5ea00f1b407
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Samba\\MyDigitalSchoolPlugin\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Samba\\MyDigitalSchoolPlugin\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit65c24c08a7a461ad5b7ac5ea00f1b407::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit65c24c08a7a461ad5b7ac5ea00f1b407::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit65c24c08a7a461ad5b7ac5ea00f1b407::$classMap;

        }, null, ClassLoader::class);
    }
}
